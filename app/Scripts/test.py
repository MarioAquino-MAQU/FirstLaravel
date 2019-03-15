path = "C:\\Users\\maqu\\Projects\\firstProject\\resources\\views\\welcome.blade.php"
result = ''
with open(path, 'r') as file:
    for line in file.readlines():
        result += line
        if line.rstrip() == "@section('content')":
            print('in the if')
            result += '<p>Hello world</p>\n'
    file.close()
with open(path, 'w') as file:
    file.write(result)
    file.close()