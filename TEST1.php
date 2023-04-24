<html>
<head>
    <meta charset="UTF-8">
    <title>学生管理系统--登录界面</title>
</head>
<style>
   body{
    width:1200px;
    height:550px;
    background-color:white;
}
  .top{
    background-color:whitesmoke;
    height: 100px;
    margin-bottom: 2px;
    font-family: "微软雅黑";
    font-size: 50px;
    text-align: center;
  }
  .middle{
  	background-color:aquamarine;
    height: 400px;
  }
  .bottom{
    background-color:gainsboro;
    height: 50px;
    text-align: center;
    position: absolute;
    line-height: 50px;
    }
    .welcome{
	font-size: 5px;
	font-family："微软雅黑";
	text-align: right;
	margin-right: 20px;
	}
    .add{
        font-size: 20px;
        font-family: "微软雅黑";
       }
    
	input[type='text']{
		  border-radius:5px;
		  width：50px;
		  border: 1pxsolid #1B47A4;
		  height: 30px;
		  }
	input[type='submit']{
			width: 80px;
			height:30px;
			/*边框*/
			border: 2px solid #1B47A4;
			/*圆角*/
			border-radius: 20px;
			/*背景渐变*/
			background:-moz-linear-gradient(top， #2564EE， #225CD2);background:-webkit-linear-gradient(top, #2564EE, #225CD2)/*阴影*/
			box-shadow:0 0 10px #0F2B67, 0 3px 2px #327CFF inset; I font-size:20px;
			color: black;
			/*文本阴影*/
			text-shadow: 0 0 10px #12337A;
			}	  
	a {text-decoration:none}
	   </style>
</head>
<body>
<div class = "top">学生信息管理系统</div>	
<div class="welcome">
		<?php
		session_start();
		if(isset($_SESSION['islogin'])){
		    echo $_SESSION ['username']."，欢迎你";
		}
		?>
	
	</div>
	
<div class = "add">
        <form action="TEST5.php" method="post">
    	<input type="submit" value="添加学生" /></a>
</div>
<div class="selectName">
   <form action="TEST1.php" method="post">
	    <p>
               输入姓名: <input type="text" name="name"/>
                 <input type="submit" value="查询"/>
                 <input type="submit" value="全部学生"/>
        </p>
    </form>
</div>
<div clsaa = "middle">
     <table width="1000px" height="400px" cellspacing="0" align="center" border="1" bgcolor="aquamarine">
                <tr>
                    <th>ID</th>
                    <th>姓名</th>
                    <th>电话</th>
                    <th>专业</th>
                    <th>班级</th>
                    <th>宿舍</th>
                    <th>操作</th>
                </tr>
                <tr>
                    <?php
                try {
                        $pdo = new PDO("mysql:host=localhost;dbname=study;", "root", "123456");
                    } catch (PDOException $e) {
                        die("数据库连接失败" . $e->getMessage());
                    }

                    $pdo->query("SET NAMES 'UTF8'");
                    $sql = "SELECT * FROM study ";
                    foreach ($pdo->query($sql) as $row) {
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['phone']}</td>";
                        echo "<td>{$row['major']}</td>";
                        echo "<td>{$row['class']}</td>";
                        echo "<td>{$row['dormitoty']}</td>";
                        echo "<td>
                    <a href='javascript:doDel({$row['id']})'>删除</a>
                    <a href='TEST4.php?id=({$row['id']})'>修改</a>
                  </td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    function doDel(id){
        if(confirm("确定要删除吗？")){
            window.location = 'TEST3.php?id='+id;
        }
    }
</script>
</body>
</html>