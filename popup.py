import random
from random import randint

good =  ["doinggreat.png","keepswim.png", "nomount.png"]
love = ["doinggreat.png", "deservebest.png", "worth.png"]
laugh = ["belikethat.png", "worth.png"]
wow = ["doit.png", "keepswim.png"]
sad = ["believe.png", "deservebest.png", "doit.png", "failfast.png", "keepswim.png", "nomount.png", "worth.png"]
mad = ["belikethat.png", "failfast.png", "nomount.png", "worth.png"]

def getaff(mood):
  return mood [random.randint(0,len(mood)-1)]
