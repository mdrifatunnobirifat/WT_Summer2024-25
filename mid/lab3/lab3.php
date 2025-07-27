<!doctype html>
<html>
    <head>
        <title>JavaScript</title>
    </head>

    <body>
        <h1>Hello !</h1>
     <script>
        
        console.log("Stuent info")
        var name="Rifat";
        var age=23;
        var st=true;
        var re=3.7;
        console.log("Student name:",name);
        console.log("Student Age:",age);
        console.log("Student Status: ",st);
        console.log("result:",re);
        document.write("",name);//just trying

        console.log("/n");
        var x=11;
        var y=10;
        var n=10.30;
        var s="Hello";
        console.log("add:",x + y);
        console.log("sub:",x - y);
        console.log("multi:",x * n);
        console.log("div:",x % n);
        
       
        for(var i = 1; i<=3;i++)
        { 
          var a= 80;
          var b= 90;
          var c=85;
          var d= a+b+c;
          if(d >= 30)
          {console.log("he is passed");}
        }
        if (st==true)
            {
                console.log(name+" is a student");
            }
        else
            {
                console.log(name+" is not a student");
            }

        console.log("\n\n");


        function summ(status)
        {
            console.log(name+' is a '+status+".");
        }

        summ('student');
        function show()
        {
            alert("this student's result is"+re+"/n"+"and he is passed");
            console.log("Button is clicked");
        }
    
     </script>
     <br>
     <br>
     <button onclick="show()">click to see</button>
    </body>
</html>
