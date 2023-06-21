<!DOCTYPE html>
<html>
<head>
  <title>问答程序 - 答案</title>
</head>
<body>
  <h1>问答程序 - 答案</h1>

  <?php
    // 获取提交的问题
    $question = $_POST['question'];

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

    // 显示答案
    echo '<p>问题：' . $question . '</p>';
    echo '<p>回答：' . $answer . '</p>';
  ?>
</body>
</html>
