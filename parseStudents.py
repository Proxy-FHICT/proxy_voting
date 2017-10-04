from openpyxl import load_workbook


class Globals:
    pcnColumn = 10
    studNrColumn = 0
    PCN = "PCN: "
    STUDNR = "STUDNR: "


class Parser:
    def __init__(self):
        self.wb = load_workbook(filename='stud2.xlsx', read_only=True)
        self.ws = self.wb['all']  # ws is now an IterableWorksheet

    def getValue(self, studentNumber):
        for row in self.ws.rows:
            for cell in row:
                if (studentNumber == cell.value):
                    return row
                    # print(cell.value)

    def printRows(self):
        for row in self.ws.rows:
            for cell in row:
                print(cell.column, ":", cell.value)

    def getPCNs(self):
        for row in self.ws.rows:
            if row[Globals.pcnColumn].value:
                print(Globals.PCN, str(row[Globals.pcnColumn].value).strip())

    def getStudNrs(self):
        for row in self.ws.rows:
            if row[Globals.studNrColumn].value:
                print(Globals.STUDNR, str(row[Globals.studNrColumn].value).strip())

    def getPCNsForSeed(self):
        for row in self.ws.rows:
            if row[Globals.pcnColumn].value:
                print('"%s",' % str(row[Globals.pcnColumn].value).strip())

    def getStudNrsForSeed(self):
        for row in self.ws.rows:
            if row[Globals.studNrColumn].value:
                print('"%s",'%(str(row[Globals.studNrColumn].value).strip()))


    def getMaxMinStudNr(self):
        max = 0
        min = 9999999
        for row in self.ws.rows:
            try:
                if int(row[Globals.studNrColumn].value) > max:
                    max = int(row[Globals.studNrColumn].value)
                if int(row[Globals.studNrColumn].value) < min:
                    min = int(row[Globals.studNrColumn].value)
            except Exception as e:
                print(e,row[Globals.studNrColumn].value)
        print("Max:%s - Min:%s"%(max,min))
        return max,min

    def run(self):
        #self.printRows()
        self.getPCNs()
        self.getStudNrs()
        self.getMaxMinStudNr()


prsr = Parser()
# prsr.run()
# prsr.getPCNsForSeed()
prsr.getStudNrsForSeed()

