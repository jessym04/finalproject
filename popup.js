import random

def getaff(mood):
  good =  ["doinggreat.png","keepswim.png", "nomount.png"]
  love = ["doinggreat.png", "deservebest.png", "worth.png"]
  laugh = ["belikethat.png", "worth.png"]
  wow = ["doit.png", "keepswim.png"]
  sad = ["believe.png", "deservebest.png", "doit.png", "failfast.png", "keepswim.png", "nomount.png", "worth.png"]
  mad = ["belikethat.png", "failfast.png", "nomount.png", "worth.png"]
  if mood == "good":
    return good[randint(0,len(good)-1)]
  if mood == "love":
    return love[randint(0,len(love)-1)]
  if mood == "laugh":
    return laugh[randint(0,len(laugh)-1)]
  if mood == "wow":
    return wow[randint(0,len(wow)-1)]
  if mood == "sad":
    return sad[randint(0,len(randint)-1)]
  if mood == "mad":
    return mad[randint(0,len(randint)-1)]
