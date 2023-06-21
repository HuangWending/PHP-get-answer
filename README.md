# PHP-get-answer
PHP问答网页
<!DOCTYPE html>
这是HTML文档类型声明，指定文档使用HTML格式。
<html>
开始一个HTML文档。
<head>
  <title>问答程序</title>
</head>
在<head>标签中，定义了文档的头部信息。<title>标签用于指定文档的标题，这里的标题是"问答程序"。
<form method="POST" action="get_answer.php">
<form>标签用于创建一个表单，method="POST"指定表单的提交方法为POST，action="get_answer.php"指定了提交表单时要发送数据的目标URL为"get_answer.php"。
<label for="question">问题：</label>
<label>标签用于创建表单元素的标签。for="question"指定了与下面的输入框相关联的id为"question"的元素。这里显示的文本是"问题："。
<input type="text" id="question" name="question" required>
<input>标签用于创建一个输入框。type="text"指定输入框类型为文本，id="question"指定了该输入框的id为"question"，name="question"指定了该输入框的名称为"question"，required表示该输入框为必填项。
<button type="submit">提交</button>
<button>标签用于创建一个按钮。type="submit"指定按钮的类型为提交按钮，点击该按钮将提交表单数据。这里按钮上显示的文本是"提交"。
</form>
结束表单。
</body>
</html>
结束文档的<body>和<html>标签。
<?php
这是PHP代码的起始标记，表示以下内容是PHP代码。
// 获取提交的问题
$question = $_POST['question'];
这行代码用于从表单提交的POST请求中获取问题。它将表单字段question的值赋给变量$question，即获取用户提交的问题。
// 根据问题选择相应的答案
$answer = '';
switch ($question) {
  case '你好':
    $answer = '你好';
    break;
  case '你的名字是什么':
    $answer = '黄文定';
    break;
  case '你的生日是什么时候':
    $answer = '2009年7月18日';
    break;
  case '你是中国人吗':
    $answer = '我是中国人';
    break;
  case '台湾是中国的吗':
    $answer = '台湾是中国的';
    break;
  case '你爱我吗':
    $answer = '这是一个由我决定的选项，我需要认真，但是我还是爱着你';
    break;
  case '你喜欢去哪里':
    $answer = '中国大陆和中国台湾';
    break;
  case '你有朋友吗':
    $answer = '没有';
    break;
  case '你的心情怎么样':
    $answer = '自卑，孤独';
    break;
  default:
    $answer = '抱歉，我无法回答你的问题';
    break;
}
这段代码使用switch语句根据用户的问题选择相应的答案。根据$question的值，将执行匹配的case语句块并将对应的答案赋给变量$answer。如果没有匹配的问题，将执行default语句块，并将默认答案赋给$answer。
// 显示答案
echo '<p>问题：' . $question . '</p>';
echo '<p>回答：' . $answer . '</p>';
这两行代码用于将问题和答案显示在网页上。使用echo语句将HTML代码和变量值输出到页面。在这里，它们将问题和答案包装在<p>标签中，并通过字符串拼接将变量值插入到HTML代码中。
?>
这是PHP代码的结束标记，表示PHP代码块的结束。
