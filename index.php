<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fun Translator</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style media="screen">
        h1{
            background-color: #ff5252;
            font-family: 'Times New Roman'
        }
        body{
            margin:0px;
            padding: 0px;
        }
    </style>
</head>
<body>
        <h1 class="display-2">Fun Translator</h1>

        <form>
            <label for="string">Enter your sentence in English<br></label>
            <input type="text" id="string" name="string" class="form-control" autocomplete="off"><br>
            <label for="choice">Enter your choice</label>
            <select class="form-control" id="choice" name="choice">
                <option value="minion">Minion</option>
                <option value="shakespeare">Shakespeare</option>
                <option value="yoda">Yoda</option>
                <option value="pirate">Pirate</option>
                <option value="dothraki">Dothraki</option>
                <option value="valyrian">Valyrian</option>
                <option value="morse">Morse Code</option>
            </select><br>
            <input type="button" class="btn btn-dark mx-auto" onclick="loadresponse()" value='Translate'><br>

            <label for="response">Translated Text:</label><br>
            <input type="text" class="form-control" name="response" id='response'>

            <div id="error"></div>

        </form>
        <footer class='text-center'>
            <hr>
            <blockquote>
                This is a free service and depends on other services for translating. And is made only for testing. And the translations are capped at 5 per hour. An suggestions or messages are welcome
                <a href="mailto:lucifyer777@gmail.com" target="_top">Here</a>
            </blockquote>
            <br>
            A open source project by Lucifyer
        </footer>


    <script>
    //Ajax function to load the response and display it in the appropriate field
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
                if('error' in myobj)
                {
                    document.getElementById('response').value='';
                    document.getElementById("error").classList.add('alert');
                    document.getElementById("error").classList.add('alert-danger');
                    document.getElementById('error').innerHTML = myobj['error']['message'];
                }
                else
                {
                    document.getElementById("error").classList.remove('alert');
                    document.getElementById("error").classList.remove('alert-danger');
                    document.getElementById('response').value = myobj['contents']['translated'];
                    document.getElementById('error').innerHTML = '';
                }
            }
        }
        xhr.send();
    }
    </script>

</body>
</html>
