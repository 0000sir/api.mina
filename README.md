# 让小爱同学主动说话

基于 https://github.com/tidaybreak/api.mina 的成果，增加了多设备支持，增加了一个web API用于客户端调用，简单如ESP8266的芯片也能开口说话了。

## 获取设备列表

http://localhost/api.php?key=1111111111&action=devices

## 说话

http://localhost/api.php?key=1111111111&action=tts&device=your-device-id-from-first-step&text=%E9%9D%9E%E5%B8%B8%E5%A5%BD-is-url-encoded-text
