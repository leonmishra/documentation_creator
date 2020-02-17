from .DocumentationTemplate import DocumentationTemplate as documentationTemplate


class DocumentationWriter():
    __outputFile = "/home/muvi/PycharmProjects/documentation_creator/output/documentation.php";

    __template = """
            /**
             * {apiType}
             * @api            {{{requestMethod}}} Billing {apiName}
             * @apiParamExample {json} Request-Example:
             *   {requestParameters}
             * @apiName        {apiName}
             * @apiDescription {apiDescription}
             * @apiGroup       Billing: Subscription
             * @apiParam {{String}} app_token A valid application token
             * @apiParam {{String}} product_key A valid product key
             * @apiParam {{String}} country_code Country code like IN, US, EU etc
             */   
            """;

    __varDetails=None

    def getVarDetails(self,varName):
        varDetails = None
        if self.__varDetails is not None:
            try:
                varDetails=self.__varDetails[varName]
            except Exception as e:
                pass

        return varDetails

    def __writeToFile(self, data: str, append: bool = True):
        openMethod = "a+" if append else "w+"
        with open(self.__outputFile, openMethod) as file:
            file.write(data)
            file.close()

    def setTemplate(self, template: str):
        self.__template = template
        return self;

    def setOtputFile(self, filePath: str):
        self.__outputFile = filePath
        return self;

    def getVariableType(self, variable):
        if isinstance(variable, int):
            return "Integer"
        elif (isinstance(variable, bool)):
            return "Boolean"
        elif (isinstance(variable, float)):
            return "Float"
        elif (isinstance(variable, dict)):
            return "Json"
        elif (isinstance(variable, list)):
            return "Array"
        else:
            return "String"

    def createApiDocumentation(self, data: dict):
        self.__varDetails=data['varDetails']

        template = documentationTemplate()
        template.start()
        if data['apiType'] == "CMS":
            template.addLine("apiPrivate")

        template.addAttribute("api", "{{{apiMethod}}} {apiPath} {apiTitle} ".format(
            apiMethod=data["requestMethod"],apiTitle=data["apiName"],apiPath=data['apiEndPoint']
        ))

        if data['requestData'] != "nan":
            template.addAttribute("apiParamExample {json} Request-Example:", "")
            template.addLine(data['requestData'])

        template.addBreak()
        template.addAttribute("apiName", data['apiName'])
        template.addAttribute("apiDescription", data['apiDescription'])
        template.addAttribute("apiGroup", data['apiGroup'])
        template.addBreak()

        # --------------------------------
        requestDataJson = data['requestDataJson']
        if requestDataJson is not None and "query" not in requestDataJson.keys():

            for requestParameterName in requestDataJson.keys():
                paramDescription = self.getVarDetails(requestParameterName)
                if paramDescription is None:
                    paramDescription = "A valid {}".format(requestParameterName.replace("_", " "))

                paramDetails = "{{{paramType}}} {paramCode} {paramDescription}".format(
                    paramType=self.getVariableType(requestDataJson[requestParameterName]),
                    paramCode=requestParameterName,
                    paramDescription=paramDescription
                )
                template.addAttribute("apiParam", paramDetails)

            template.addBreak()

            template.addAttribute("apiExample        Example usage:", "")
            template.addLine("curl -X POST <Domain name>/{}".format(data['apiEndPoint']))
            for requestParameterName in requestDataJson.keys():
                template.addLine("-F {varName} = <{varName}> ".format(varName=requestParameterName))

        template.addBreak()
        # -----------------------------------

        responseDataJson = data["responsetDataJson"]
        if responseDataJson is not None:
            if (isinstance(responseDataJson, list) and len(responseDataJson) > 0):
                responseDataJson = responseDataJson[0]

            if (isinstance(responseDataJson, dict)):

                for responseParameterName in responseDataJson.keys():

                    details = ""

                    if isinstance(responseDataJson[responseParameterName], (list)):
                        innerData=responseDataJson[responseParameterName];
                        rpnDetails = "{{{paramName}[]}} Array/Object".format(paramName=responseParameterName)
                        if len(innerData) > 0 and isinstance(innerData[0], (dict)):
                            innerDataSet= innerData[0]
                            for key in innerDataSet.keys():
                                keyDetails=""
                                keyName=responseParameterName+"."+key;
                                innerRpnDetails = "{{{varType}}} {keyName} {keyDetails}".format(
                                    varType=self.getVariableType(innerDataSet[key]),
                                    keyName=keyName, keyDetails=self.getVarDetails(responseParameterName)
                                )
                                template.addAttribute("apiSuccess", innerRpnDetails)
                                if self.getVarDetails(responseParameterName) is None:
                                    print(responseParameterName)


                    else:
                        if self.getVarDetails(responseParameterName) is None:
                            print(responseParameterName)
                        rpnDetails = "{{{varType}}} {responseKey} {details}".format(
                            varType=self.getVariableType(responseDataJson[responseParameterName]),
                            responseKey=responseParameterName, details=self.getVarDetails(responseParameterName)
                        )

                    template.addAttribute("apiSuccess", rpnDetails)

            else:
                pass

        # if data["apiSuccess"] != "nan" and data["apiSuccess"] is not None:
        #     apiSuccess=str(data["apiSuccess"]).split("\n")
        #     for successMessage in apiSuccess:
        #         template.addAttribute("apiSuccess", successMessage)

        # if data["apiError"] != "nan" and data["apiError"] is not None:
        #     apiError=str(data["apiError"]).split("\n")
        #     for errorMessage in apiError:
        #         template.addAttribute("apiError", errorMessage)

        template.addBreak()

        template.addAttribute("apiSuccessExample Success-Response:", "")
        template.addLine(data["responseData"])

        return self.__writeToFile(template.getText(), True)

    def getTemplate(self):
        return str(self.__template)

    def getOutpuFile(self):
        return str(self.__outputFile)
