<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset ="UTF-8"/>
        <title>exefcicio 1</title>
        <script>
            function validar(valor1, valor2, valor3, valor4)
            {
                mensagem="";
                if(valor1=="")
                {
                    mensagem+= "faltou digitar o nome!! \n";
                    
                }
                else
                {
                    mensagem+= "já digitou o nome ('"+valor1+"')!! \n";
                    
                }
                if(valor2=="")
                {
                    mensagem+= "faltou digitar o email !!\n";
                   
                }
                else
                {
                    mensagem+= "já digitou o email ('"+valor2+"')!!\n";
                    
                }
                if(valor3=="")
                {
                    mensagem+= "faltou digitar o sexo !!\n";
                   
                }
                else
                {
                    mensagem+= "já digitou o sexo ('"+valor3+"')!!\n";
                    
                }
                if(valor4=="")
                {
                    mensagem+= "faltou digitar a data de nascimento!! \n";
                   
                }
                else
                {
                    mensagem+= "já digitou a data de nascimento ('"+valor3+"')!!\n";
                    
                }
                alert(mensagem);
            }
        </script>
    </head>
    <body>
        <form name="form" method="post">
            <p>
                <label>Nome:</label>
                <input type="text" name="nome" />
            </p>
            <p>
                <label>email:</label>
                <input type="email" name="email" />
            </p> 
            <p>
                <label>Sexo:</label>
                <select name ="sexo" >
                    <option value="">::selecione::</option>
                    <option value="masculino">masculino</option>
                    <option value="feminino">feminino</option>
                    <option value="indefinido">indefinido</option>
                </select>
            </p>
            <p>
                <label>Data de nascimento:</label>
                <input type="date" name="data" />
            </p> 
            <p>
                <input type="button" onclick="validar(document.form.nome.value, document.form.email.value, document.form.sexo.value, document.form.data.value);" value="enviar"/>
            </p>
        </form>
    </body>
</html>