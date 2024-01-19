<?php 
 
 function random($min, $max) {  
    return mt_rand($min, $max);  
}  

 

function get2SS($len) {  
    $str="";  
    for($i=0;$i<$len;$i++) {  
        if($i==0) $str.=1;  
        else $str.=random(0,1);  
    }  
    return $str;  
}  

function imgSize($len1) {  
    for ($i=1;$i<=2;$i++) {  
        if($i==1) return $len1;  
        else return $len1;  
    }  
}  

function get_answer($num){
    $ans = 0;
    for($i=strlen($num)-1;$i>0;$i--) {
        $ans+=$num[strlen($num)];
    }
    return;
}

    $var1 = 0;  
    $var2 = 0;  
    $var3 = 0;  
    $var4 = 0;  
    $var5 = 0;  
    $var6 = 0;  


    $tasks = [  
        "Необходимо перевести значение $var1 из 2СС в 10СС. В качестве ответа указать число.",  
        "Какой минимальный объем памяти нужно зарезервировать, чтобы можно было сохранить любое растроое  
         изображение размером $var2 x $var3 пикселей при условии, что в изображении могут использоваться $var4 различных цветов?",  
        "Напишите колличество вхождений символа $var5 в следующем тексте <pre>  
        Я вас любил: любовь еще, быть может,  
        В душе моей угасла не совсем;  
        Но пусть она вас больше не тревожит;  
        Я не хочу печалить вас ничем.  
        Я вас любил безмолвно, безнадежно,  
        То робостью, то ревностью томим;  
        Я вас любил так искренно, так нежно,  
        Как дай вам Бог любимой быть другим.  
        </pre>. Записать число вхождений $var6"  
    ];  
  

    $randomElementsArray = array('16', '128', '256');  

    function randColor($randomElementsArray){  
        return $randomElementsArray[array_rand($randomElementsArray)];  
    }  

    $letters = ['А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р',   
        'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я'];  


    function randLetter($letters) {  
        return $letters[array_rand($letters)];  
    }  

    $poems = [   
        '<pre>  
        Я вас любил: любовь еще, быть может,   
        В душе моей угасла не совсем;   
        Но пусть она вас больше не тревожит;   
        Я не хочу печалить вас ничем.   
        Я вас любил безмолвно, безнадежно,   
        То робостью, то ревностью томим;   
        Я вас любил так искренно, так нежно,   
        Как дай вам Бог любимой быть другим.</pre>',    
           
        '<pre>  
        Сижу за решеткой в темнице сырой.   
        Вскормленный в неволе орел молодой,   
        Мой грустный товарищ, махая крылом,   
        Кровавую пищу клюет под окном,   
        Клюет, и бросает, и смотрит в окно,   
        Как будто со мною задумал одно.   
        Зовет меня взглядом и криком своим   
        И вымолвить хочет: «Давай улетим!   
        Мы вольные птицы; пора, брат, пора!   
        Туда, где за тучей белеет гора,   
        Туда, где синеют морские края,   
        Туда, где гуляем лишь ветер… да я!..»</pre>',   
           
        '<pre>  
        Уж небо осенью дышало,   
        Уж реже солнышко блистало,   
        Короче становился день,   
        Лесов таинственная сень   
        С печальным шумом обнажалась,   
        Ложился на поля туман,   
        Гусей крикливых караван   
        Тянулся к югу: приближалась   
        Довольно скучная пора;   
        Стоял ноябрь уж у двора.</pre>',   
           
        '<pre>  
        В тот год осенняя погода   
        Стояла долго на дворе, 
Зимы ждала, ждала природа.   
        Снег выпал только в январе
На третье в ночь. Проснувшись рано,   
        В окно увидела Татьяна   
        Поутру побелевший двор,   
        Куртины, кровли и забор,   
        На стеклах легкие узоры,   
        Деревья в зимнем серебре,   
        Сорок веселых на дворе   
        И мягко устланные горы   
        Зимы блистательным ковром.   
        Все ярко, все бело кругом.</pre>'];   

function randPoem($poems) {  
    return $poems[array_rand($poems)];  
}  
 

    for($i=0;$i<4;$i++) {  
        switch($_GET['index1']) {  
            case 0:  
                $var1 = get2SS(random(2,5));  
                echo "<p>Необходимо перевести значение $var1 из 2СС в 10СС. В качестве ответа указать 
                число.</p>";  
                echo "<label>Ответ:</label><input type='number'> <input type='submit'>  <br>";  
                echo"<p id='val$i'></p><hr>";  
                break;  
            case 1:  
                $var2 = imgSize(random(128,256));  
                $var3 = imgSize(random(128,256));  
                  
                $var4 = randColor($randomElementsArray);  
                echo "<p>Какой минимальный объем памяти нужно зарезервировать, чтобы можно было<br> 
                сохранить любое растроое 
                изображение размером $var2 x $var3 пикселей при условии, <br> 
                что в изображении могут использоваться $var4 различных цветов?</p>";  
                echo "<label>Ответ:</label><input type='number'> <input type='submit'>  <br>";  
                      
                break;  

              
            case 2:   
                $var5 = randletter ($letters);   
                $var6 = randPoem($poems);   
                echo "<p>Напишите колличество вхождений символа $var5 в следующем тексте <pre>   
                $var6   
                </pre> Записать число вхождений $var5</p>";   
                echo "<label>Ответ:</label><input type='number'> <input type='submit'>  <br>";   
        
                break;  
        }  
    }  
    echo  "<input type='submit'onclick='example()'>"; 
?>  

<script>
    let btn = document.getElementById("btn");

    btn.addEventListner("click", () => {
        for (let i = 0; i<4; i++){
        let ans = document.getElementById(`ans${i}`).value;
        let ans_user = document.getElementById(`ans_user${i}`).value;
        document.getElementById(`val${i}`).innerText = `Правильный ответ: ${ans}`;
        if (ans==ans_user)
        document.getElementById(`val${i}`).style.color = "green";
    else
        document.getElementById(`val${i}`).style.color = "red";
            
    }
    })
</script>