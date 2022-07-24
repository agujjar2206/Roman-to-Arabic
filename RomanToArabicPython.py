def intValue(i):
        switcher={
                'I': 1,
                'V': 5,
                'X': 10,
                'L': 50,
                'C': 100,
                'D': 500,
                'M': 1000
             }
        return switcher.get(i,"Invalid day of week")
def romanToInteger(romanInput):
    total = 0;
    i = 0;
    while (i < len(romanInput)):
        s1 = intValue(romanInput[i]);
        if (i + 1 < len(romanInput)):
            s2 = intValue(romanInput[i + 1]);
            if (s1 >= s2):
                total = total + s1;
                i = i + 1;
            else:
                total = total + s2 - s1;
                i = i + 2;
        else:
            total = total + s1;
            i = i + 1;
    print (total);
    doAnother = input("\nDo Another? (Y/N) ")
    if (doAnother == "Y"):
        read()
def read():
    number = input("Enter Roman Numeral: ")
    romanToInteger(number)
read()
