class bankAccount():
    def __init__(self, owner, balance):
        self.owner = owner
        self.balance = balance

    def deposit(self, amount):
        if amount > 0:
            self.balance += amount

    def withdraw(self, amount):
        if amount > 0 and self.balance >= amount:
            self.balance -= amount


    def printInfo(self):
        print(self.owner)
        print(self.balance)
