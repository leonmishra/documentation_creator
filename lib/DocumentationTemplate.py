class DocumentationTemplate():
    __template = "";

    def start(self):
        self.__template = "\n\n\n/**\n*\n"
        return self

    def addBreak(self):
        self.__template += "*\n"
        return self

    def addAttribute(self, name: str, value: str):
        value = value.replace("\n", "\n* ")
        self.__template += "* @{}        {}\n".format(name, value)
        return self

    def addLine(self, value: str):
        value=value.replace("\n","\n* ")
        self.__template += "* {}\n".format(value)
        return self

    def getText(self):
        self.__template += "*\n**/"
        return self.__template
