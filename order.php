<html>
<head>

<title>แบบทดสอบ</title>
</head>

<h1>ผลคะแนนการสอบ</h1>
<?php
//กำหนดคะแนนเริ่มต้น
$score=0;

//ประมวลผลข้อ1
echo"ข้อ 1 คุณเลือกคำตอบ<br>";
echo $_POST["book1"]."<br>";
//ตรวจคำตอบ
if($_POST["book1"]=="an, -")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ2
echo"ข้อ2 คุณเลือกคำตอบ<br>";
echo $_POST["book2"]."<br>";
//ตรวจคำตอบ
if($_POST["book2"]=="a, -")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ3
echo"ข้อ3 คุณเลือกคำตอบ<br>";
echo $_POST["book3"]."<br>";
//ตรวจคำตอบ
if($_POST["book3"]=="any, some")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ4
echo"ข้อ4 คุณเลือกคำตอบ<br>";
echo $_POST["book4"]."<br>";
//ตรวจคำตอบ
if($_POST["book4"]=="some")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ5
echo"ข้อ5 คุณเลือกคำตอบ<br>";
echo $_POST["book5"]."<br>";
//ตรวจคำตอบ
if($_POST["book5"]=="It’s yours")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ6
echo"ข้อ6 คุณเลือกคำตอบ<br>";
echo $_POST["book6"]."<br>";
//ตรวจคำตอบ
if($_POST["book6"]=="me")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ7
echo"ข้อ7 คุณเลือกคำตอบ<br>";
echo $_POST["book7"]."<br>";
//ตรวจคำตอบ
if($_POST["book7"]=="on, in")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ8
echo"ข้อ8 คุณเลือกคำตอบ<br>";
echo $_POST["book8"]."<br>";
//ตรวจคำตอบ
if($_POST["book8"]=="the tallest, the shortest")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ9
echo"ข้อ9 คุณเลือกคำตอบ<br>";
echo $_POST["book9"]."<br>";
//ตรวจคำตอบ
if($_POST["book9"]=="more expensive")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ10
echo"ข้อ10 คุณเลือกคำตอบ<br>";
echo $_POST["book10"]."<br>";
//ตรวจคำตอบ
if($_POST["book10"]=="less")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ11
echo"ข้อ11 คุณเลือกคำตอบ<br>";
echo $_POST["book11"]."<br>";
//ตรวจคำตอบ
if($_POST["book11"]=="goes, gets up")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ12
echo"ข้อ12 คุณเลือกคำตอบ<br>";
echo $_POST["book12"]."<br>";
//ตรวจคำตอบ
if($_POST["book12"]=="is dancing, are sitting")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ13
echo"ข้อ13 คุณเลือกคำตอบ<br>";
echo $_POST["book13"]."<br>";
//ตรวจคำตอบ
if($_POST["book13"]=="have been, has lived")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ14
echo"ข้อ14 คุณเลือกคำตอบ<br>";
echo $_POST["book14"]."<br>";
//ตรวจคำตอบ
if($_POST["book14"]=="went")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ15
echo"ข้อ15 คุณเลือกคำตอบ<br>";
echo $_POST["book15"]."<br>";
//ตรวจคำตอบ
if($_POST["book15"]=="was cooking, arrived")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ16
echo"ข้อ16 คุณเลือกคำตอบ<br>";
echo $_POST["book16"]."<br>";
//ตรวจคำตอบ
if($_POST["book16"]=="will go")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ17
echo"ข้อ17 คุณเลือกคำตอบ<br>";
echo $_POST["book17"]."<br>";
//ตรวจคำตอบ
if($_POST["book17"]=="is going to")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ18
echo"ข้อ18 คุณเลือกคำตอบ<br>";
echo $_POST["book18"]."<br>";
//ตรวจคำตอบ
if($_POST["book18"]=="has worked")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ19
echo"ข้อ19 คุณเลือกคำตอบ<br>";
echo $_POST["book19"]."<br>";
//ตรวจคำตอบ
if($_POST["book19"]=="has")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ20
echo"ข้อ20 คุณเลือกคำตอบ<br>";
echo $_POST["book20"]."<br>";
//ตรวจคำตอบ
if($_POST["book20"]=="receives")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}


//ประมวลผลข้อ21
echo"ข้อ21 คุณเลือกคำตอบ<br>";
echo $_POST["book21"]."<br>";
//ตรวจคำตอบ
if($_POST["book21"]=="That sounds great! What time does the party start?")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ22
echo"ข้อ22 คุณเลือกคำตอบ<br>";
echo $_POST["book22"]."<br>";
//ตรวจคำตอบ
if($_POST["book22"]=="Would you like to leave a message?")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ23
echo"ข้อ23 คุณเลือกคำตอบ<br>";
echo $_POST["book23"]."<br>";
//ตรวจคำตอบ
if($_POST["book23"]=="Can I help you?")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ24
echo"ข้อ24 คุณเลือกคำตอบ<br>";
echo $_POST["book24"]."<br>";
//ตรวจคำตอบ
if($_POST["book24"]=="how can I get to the nearest supermarket?")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ25
echo"ข้อ25 คุณเลือกคำตอบ<br>";
echo $_POST["book25"]."<br>";
//ตรวจคำตอบ
if($_POST["book25"]=="nervous")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ26
echo"ข้อ26 คุณเลือกคำตอบ<br>";
echo $_POST["book26"]."<br>";
//ตรวจคำตอบ
if($_POST["book26"]=="Please be quiet. You are annoying others.")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ27
echo"ข้อ27 คุณเลือกคำตอบ<br>";
echo $_POST["book27"]."<br>";
//ตรวจคำตอบ
if($_POST["book27"]=="I must apologize.")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ28
echo"ข้อ28 คุณเลือกคำตอบ<br>";
echo $_POST["book28"]."<br>";
//ตรวจคำตอบ
if($_POST["book28"]=="I’m sorry. I will pay the fine.")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ29
echo"ข้อ29 คุณเลือกคำตอบ<br>";
echo $_POST["book29"]."<br>";
//ตรวจคำตอบ
if($_POST["book29"]=="Can you introduce yourself, please?")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ30
echo"ข้อ30 คุณเลือกคำตอบ<br>";
echo $_POST["book30"]."<br>";
//ตรวจคำตอบ
if($_POST["book30"]=="Please check your temperature and wash your hand with the alcohol before coming in.")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ31
echo"ข้อ31 คุณเลือกคำตอบ<br>";
echo $_POST["book31"]."<br>";
//ตรวจคำตอบt
if($_POST["book31"]=="Have a good trip.")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ32
echo"ข้อ32 คุณเลือกคำตอบ<br>";
echo $_POST["book32"]."<br>";
//ตรวจคำตอบ
if($_POST["book32"]=="I’m sorry to bother you. This is my first day.")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ33
echo"ข้อ33 คุณเลือกคำตอบ<br>";
echo $_POST["book33"]."<br>";
//ตรวจคำตอบ
if($_POST["book33"]=="Do you mind if I smoke in your car?")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ34
echo"ข้อ34 คุณเลือกคำตอบ<br>";
echo $_POST["book34"]."<br>";
//ตรวจคำตอบ
if($_POST["book34"]=="Fingers crossed!")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ35
echo"ข้อ35 คุณเลือกคำตอบ<br>";
echo $_POST["book35"]."<br>";
//ตรวจคำตอบ
if($_POST["book35"]=="My deepest condolences to your family on death of your brother.")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ36
echo"ข้อ36 คุณเลือกคำตอบ<br>";
echo $_POST["book36"]."<br>";
//ตรวจคำตอบ
if($_POST["book36"]=="Of course.")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ37
echo"ข้อ37 คุณเลือกคำตอบ<br>";
echo $_POST["book37"]."<br>";
//ตรวจคำตอบ
if($_POST["book37"]=="What’s the weather like?")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ38
echo"ข้อ38 คุณเลือกคำตอบ<br>";
echo $_POST["book38"]."<br>";
//ตรวจคำตอบ
if($_POST["book38"]=="Congratulation")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ39
echo"ข้อ39 คุณเลือกคำตอบ<br>";
echo $_POST["book39"]."<br>";
//ตรวจคำตอบ
if($_POST["book39"]=="I’m terribly sorry.")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

//ประมวลผลข้อ40
echo"ข้อ40 คุณเลือกคำตอบ<br>";
echo $_POST["book40"]."<br>";
//ตรวจคำตอบ
if($_POST["book40"]=="you didn’t get hurt.")
{echo"ถูกต้อง"."<p>";$score++;}
else 
{echo"ยังไม่ถูกต้อง"."<p>";}

echo "ข้อ 41 คุณเลือกคำตอบ<br>";
echo $_POST["book41"]."<br>";
//ตรวจคำตอบ
if($_POST["book41"]=="where he was")
{echo"ถูกต้อง"."<br>";$score++;}
else
{echo"ยังไม่ถูกต้อง"."<br>";}

echo "ข้อ 42 คุณเลือกคำตอบ<br>";
echo $_POST["book42"]."<br>";
//ตรวจคำตอบ
if($_POST["book42"]=="afraid")
{echo"ถูกต้อง"."<br>";$score++;}
else
{echo"ยังไม่ถูกต้อง"."<br>";}

echo "ข้อ 43 คุณเลือกคำตอบ<br>";
echo $_POST["book43"]."<br>";
//ตรวจคำตอบ
if($_POST["book43"]=="elderly person")
{echo"ถูกต้อง"."<br>";$score++;}
else
{echo"ยังไม่ถูกต้อง"."<br>";}

echo "ข้อ 44 คุณเลือกคำตอบ<br>";
echo $_POST["book44"]."<br>";
//ตรวจคำตอบ
if($_POST["book44"]=="Farmer")
{echo"ถูกต้อง"."<br>";$score++;}
else
{echo"ยังไม่ถูกต้อง"."<br>";}

echo "ข้อ 45 คุณเลือกคำตอบ<br>";
echo $_POST["book45"]."<br>";
//ตรวจคำตอบ
if($_POST["book45"]=="I just got the first one last week")
{echo"ถูกต้อง"."<br>";$score++;}
else
{echo"ยังไม่ถูกต้อง"."<br>";}

echo "ข้อ 46 คุณเลือกคำตอบ<br>";
echo $_POST["book46"]."<br>";
//ตรวจคำตอบ
if($_POST["book46"]=="Are you ready to order?")
{echo"ถูกต้อง"."<br>";$score++;}
else
{echo"ยังไม่ถูกต้อง"."<br>";}

echo "ข้อ 47 คุณเลือกคำตอบ<br>";
echo $_POST["book47"]."<br>";
//ตรวจคำตอบ
if($_POST["book47"]=="sign in")
{echo"ถูกต้อง"."<br>";$score++;}
else
{echo"ยังไม่ถูกต้อง"."<br>";}

echo "ข้อ 48 คุณเลือกคำตอบ<br>";
echo $_POST["book48"]."<br>";
//ตรวจคำตอบ
if($_POST["book48"]=="pleased")
{echo"ถูกต้อง"."<br>";$score++;}
else
{echo"ยังไม่ถูกต้อง"."<br>";}

echo "ข้อ 49 คุณเลือกคำตอบ<br>";
echo $_POST["book49"]."<br>";
//ตรวจคำตอบ
if($_POST["book49"]=="All is okay.")
{echo"ถูกต้อง"."<br>";$score++;}
else
{echo"ยังไม่ถูกต้อง"."<br>";}

echo "ข้อ 50 คุณเลือกคำตอบ<br>";
echo $_POST["book50"]."<br>";
//ตรวจคำตอบ
if($_POST["book50"]=="Do you mind sitting on the floor?")
{echo"ถูกต้อง"."<br>";$score++;}
else
{echo"ยังไม่ถูกต้อง"."<br>";}

//รายงานคะแนน
echo "คะแนนที่ได้"."$score";
?>

</body>
</html>
