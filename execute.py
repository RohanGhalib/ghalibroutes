import time
import requests
while True:
  response = requests.get('http://127.0.0.1:8000')
  print(response.status_code)
  time.sleep(0.0001)