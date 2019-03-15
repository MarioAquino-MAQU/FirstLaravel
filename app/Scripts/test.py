import sys

path = "C:\\Users\\maqu\\Projects\\firstProject\\resources\\views\\welcome.blade.php"
#path = '../../resources/views/welcome.blade.php'
result = ''
with open(path, 'r') as file:
    for line in file.readlines():
        result += line
        if line.rstrip() == "@section('content')":
            result += '<p>{}</p>\n'.format(sys.argv[1])
    file.close()
with open(path, 'w') as file:
    file.write(result)
    print("done")
    file.close()