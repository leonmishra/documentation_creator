import pandas as pd;
import json
from lib.DocumentationWriter import DocumentationWriter as documentationWriter


def getVariableDetails():
    with open('/home/muvi/PycharmProjects/documentation_creater/input/temp.json') as jsonFile:
        varDetails = json.load(jsonFile)
        return  varDetails;

def init():
    # excelData = pd.read_excel("/home/muvi/PycharmProjects/documentation_creater/input/billing_service.xlsx");
    excelData = pd.read_excel("/home/muvi/PycharmProjects/documentation_creater/input/temp _sheet.xlsx",
                              sheet_name="billing");

    #return getVariableDetails();
    for i in excelData.index:
        docWriter = documentationWriter()

        dataList = dict(
            varDetails=getVariableDetails(),
            apiSet="Billing",
            apiName=str(excelData['apiName'][i]),
            apiEndPoint=str(excelData['apiEndPoint'][i]),
            apiType=str(excelData['apiType'][i]),
            requestMethod=str(excelData['requestMethod'][i]),
            requestData=str(excelData['requestData'][i]),
            responseData=str(excelData['responseData'][i]),
            apiDescription=str(excelData['apiDescription'][i]),
            apiGroup=str(excelData['apiGroup'][i]),
            # apiSuccess = str(excelData['apiSuccess'][i]),
            # apiError = str(excelData['apiError'][i]),
        )

        try:
            jsonRequestData = json.loads(dataList['requestData'])
            dataList['requestDataJson'] = jsonRequestData
        except Exception as e:
            dataList['requestDataJson'] = None

        try:
            jsonResponseData = json.loads(dataList['responseData'])
            dataList['responsetDataJson'] = jsonResponseData

        except Exception as e:
            dataList['responsetDataJson'] = None

        # test(dataList['requestData'])
        docWriter.createApiDocumentation(data=dataList)
        # break;


if __name__ == "__main__":
    init()
