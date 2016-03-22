# 技术方案

### 一、生成静态网页的文件修改判断

1. 使用`md5_file()`或`sha1_file()`函数判断文件是都被修改，貌似后者更佳；
2. 本地使用`sha1/filename.md.sha1`文件作为存储，用于之后校验。

### 二、尽快确定项目主要结构

1. 使用 `composer` 提供的 `autoloader` 。