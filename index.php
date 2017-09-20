<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funny Translator</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
</head>
<body>

    <form >
        <label for="string">Enter your sentence in English<br></label>
        <input type="text" id="string" name="string" ><br>
        <label for="choice">Enter your choice</label>
        <select class="" id="choice" name="choice">
            <option value="minion">Minion</option>
            <option value="shakespeare">Shakespeare</option>
        </select><br>
        <input type="button" onclick="loadresponse()" value='Translate'><br>
        <hr><hr>


        <label for="response">Translated Text:</label><br>
        <input type="text"  name="response" id='response'>
    </form>


    <script>

    function loadresponse()
    {
        document.getElementById('string').value;
        var address= 'curltranslator.php?string='+document.getElementById('string').value+'&choice='+document.getElementById('choice').value+'&response=';
        var xhr= new XMLHttpRequest();
        xhr.open('GET',address,true);

        xhr.onload=function()
        {
            if(this.status==200)
            {
                var myobj=JSON.parse(this.responseText);
                if(myobj['error']['code'])
                    alert(myobj['error']['message']);
                else
                    document.getElementById('response').value= myobj['contents']['translated'];
            }
        }
        xhr.send();
    }
    </script>

</body>
</html>
