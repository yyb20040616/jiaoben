import re
string = "E280AEE281A655676569776FE281A9E281A66375697368697975616E"
# 写出正则表达式 任意2个字符
pattern = re.compile('.{2}')
# findall是找到所有的字符,再在字符中添加空格，当然你想添加其他东西当然也可以
print('%'.join(pattern.findall(string)))