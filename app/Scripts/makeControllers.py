from os import listdir
from os.path import isfile, join

#returns a list of relative paths to modelfiles
def checkModels():
    path = '../'
    onlyfiles = []
    for f in listdir(path):
        if f.endswith('.php'):
            onlyfiles.append(join(path, f))
    return onlyfiles
