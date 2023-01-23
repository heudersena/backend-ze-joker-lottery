
##### REGISTRAR NOVO USUÁRIO

```json
[POST] : http://seu-dominio.com.br/api/session/register

{
    "name": "Heuder Rodrigues de Sena",
    "email": "programadorwebti@gmail.com",
    "username": "heuder.sena",
    "password": "my-password",
    "phone": "(61) 9 9899-9999",
    "typePix": ["CPF/CNPJ","E-MAIL","CELULAR","ALEATÓRIA"],
    "keyPix": "000.000.000-01"
}

```

##### FAZER LOGIN NA PLATAFORMA

```json
[POST] : http://seu-dominio.com.br/api/session/login

{
    "email": "programadorwebti@gmail.com",
    "password": "my-password",
}
```

##### SEMPRE PEGAR AS INFORMAÇÕES ATUALIZADA DO USUÁRIO

```json
[POST] : http://seu-dominio.com.br/api/session/me

OUTPUT
{
    "name":  "Heuder Rodrigues de Sena",
    "email" : "programadorwebti@gmail.com",
    "wallet": {
        "value": "1000.23"
    },
    "withdraw": {
        {
            "id": "1",
            "value": "95.00"
        },
        {
            "id": "2",
            "value": "15.00"
        }
    }

}

```
