# Endpoints


## api/produtos




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/produtos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/produtos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "nome": "Caixa de leite condensado",
        "quantidade": 30,
        "preco": "2.50",
        "created_at": "2021-05-26T20:06:35.000000Z",
        "updated_at": "2021-05-27T18:49:06.000000Z"
    }
]
```
<div id="execution-results-GETapi-produtos" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-produtos"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-produtos"></code></pre>
</div>
<div id="execution-error-GETapi-produtos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-produtos"></code></pre>
</div>
<form id="form-GETapi-produtos" data-method="GET" data-path="api/produtos" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-produtos', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-produtos" onclick="tryItOut('GETapi-produtos');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-produtos" onclick="cancelTryOut('GETapi-produtos');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-produtos" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/produtos</code></b>
</p>
</form>


## api/produto/{id}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/produto/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/produto/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "nome": "Caixa de leite condensado",
    "quantidade": 30,
    "preco": "2.50",
    "created_at": "2021-05-26T20:06:35.000000Z",
    "updated_at": "2021-05-27T18:49:06.000000Z"
}
```
<div id="execution-results-GETapi-produto--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-produto--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-produto--id-"></code></pre>
</div>
<div id="execution-error-GETapi-produto--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-produto--id-"></code></pre>
</div>
<form id="form-GETapi-produto--id-" data-method="GET" data-path="api/produto/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-produto--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-produto--id-" onclick="tryItOut('GETapi-produto--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-produto--id-" onclick="cancelTryOut('GETapi-produto--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-produto--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/produto/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-produto--id-" data-component="url" required  hidden>
<br>
Id of the product you're looking for | Id do produto a ser pesquisado
</p>
</form>


## api/produto




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/produto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nome":"ut","quantidade":10,"preco":"voluptatem"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/produto"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nome": "ut",
    "quantidade": 10,
    "preco": "voluptatem"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-produto" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-produto"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-produto"></code></pre>
</div>
<div id="execution-error-POSTapi-produto" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-produto"></code></pre>
</div>
<form id="form-POSTapi-produto" data-method="POST" data-path="api/produto" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-produto', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-produto" onclick="tryItOut('POSTapi-produto');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-produto" onclick="cancelTryOut('POSTapi-produto');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-produto" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/produto</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nome</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nome" data-endpoint="POSTapi-produto" data-component="body" required  hidden>
<br>
Product name | Nome do produto
</p>
<p>
<b><code>quantidade</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="quantidade" data-endpoint="POSTapi-produto" data-component="body" required  hidden>
<br>
Amount in stock | Quantidade em estoque
</p>
<p>
<b><code>preco</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="preco" data-endpoint="POSTapi-produto" data-component="body" required  hidden>
<br>
Price for the product | Preço do produto
</p>

</form>


## api/produto/{produto}




> Example request:

```bash
curl -X PATCH \
    "http://127.0.0.1:8000/api/produto/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nome":"voluptas","quantidade":10,"preco":"qui"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/produto/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nome": "voluptas",
    "quantidade": 10,
    "preco": "qui"
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PATCHapi-produto--produto-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-produto--produto-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-produto--produto-"></code></pre>
</div>
<div id="execution-error-PATCHapi-produto--produto-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-produto--produto-"></code></pre>
</div>
<form id="form-PATCHapi-produto--produto-" data-method="PATCH" data-path="api/produto/{produto}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-produto--produto-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-produto--produto-" onclick="tryItOut('PATCHapi-produto--produto-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-produto--produto-" onclick="cancelTryOut('PATCHapi-produto--produto-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-produto--produto-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/produto/{produto}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>produto</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="produto" data-endpoint="PATCHapi-produto--produto-" data-component="url" required  hidden>
<br>
Id of the product you're updating | Id do produto a ser atualizado
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nome</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nome" data-endpoint="PATCHapi-produto--produto-" data-component="body" required  hidden>
<br>
New product name | Novo nome do produto
</p>
<p>
<b><code>quantidade</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="quantidade" data-endpoint="PATCHapi-produto--produto-" data-component="body" required  hidden>
<br>
New amount in stock | Nova quantidade em estoque
</p>
<p>
<b><code>preco</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="preco" data-endpoint="PATCHapi-produto--produto-" data-component="body" required  hidden>
<br>
New price for the product | Novo preço do produto
</p>

</form>


## api/produto/{produto}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/produto/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/produto/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-produto--produto-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-produto--produto-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-produto--produto-"></code></pre>
</div>
<div id="execution-error-DELETEapi-produto--produto-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-produto--produto-"></code></pre>
</div>
<form id="form-DELETEapi-produto--produto-" data-method="DELETE" data-path="api/produto/{produto}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-produto--produto-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-produto--produto-" onclick="tryItOut('DELETEapi-produto--produto-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-produto--produto-" onclick="cancelTryOut('DELETEapi-produto--produto-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-produto--produto-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/produto/{produto}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>produto</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="produto" data-endpoint="DELETEapi-produto--produto-" data-component="url" required  hidden>
<br>
Id of the product you're removing | Id do produto a ser removido
</p>
</form>


## api/pedidos




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/pedidos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/pedidos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "total": "2",
        "data": "2021-05-26 00:00:00",
        "created_at": "2021-05-26T20:09:16.000000Z",
        "updated_at": "2021-05-26T20:09:16.000000Z"
    }
]
```
<div id="execution-results-GETapi-pedidos" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-pedidos"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pedidos"></code></pre>
</div>
<div id="execution-error-GETapi-pedidos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pedidos"></code></pre>
</div>
<form id="form-GETapi-pedidos" data-method="GET" data-path="api/pedidos" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-pedidos', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-pedidos" onclick="tryItOut('GETapi-pedidos');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-pedidos" onclick="cancelTryOut('GETapi-pedidos');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-pedidos" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/pedidos</code></b>
</p>
</form>


## api/pedido/{id}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/pedido/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/pedido/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "total": "2",
    "data": "2021-05-26 00:00:00",
    "created_at": "2021-05-26T20:09:16.000000Z",
    "updated_at": "2021-05-26T20:09:16.000000Z"
}
```
<div id="execution-results-GETapi-pedido--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-pedido--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pedido--id-"></code></pre>
</div>
<div id="execution-error-GETapi-pedido--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pedido--id-"></code></pre>
</div>
<form id="form-GETapi-pedido--id-" data-method="GET" data-path="api/pedido/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-pedido--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-pedido--id-" onclick="tryItOut('GETapi-pedido--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-pedido--id-" onclick="cancelTryOut('GETapi-pedido--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-pedido--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/pedido/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-pedido--id-" data-component="url" required  hidden>
<br>
Id of the order you're looking for | Id do pedido a ser pesquisado
</p>
</form>


## api/pedido




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/pedido" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"total":"quam","data":"eius"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/pedido"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "total": "quam",
    "data": "eius"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-pedido" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-pedido"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-pedido"></code></pre>
</div>
<div id="execution-error-POSTapi-pedido" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-pedido"></code></pre>
</div>
<form id="form-POSTapi-pedido" data-method="POST" data-path="api/pedido" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-pedido', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-pedido" onclick="tryItOut('POSTapi-pedido');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-pedido" onclick="cancelTryOut('POSTapi-pedido');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-pedido" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/pedido</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>total</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="total" data-endpoint="POSTapi-pedido" data-component="body"  hidden>
<br>
Order's total value | Valor total do pedido required
</p>
<p>
<b><code>data</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="data" data-endpoint="POSTapi-pedido" data-component="body"  hidden>
<br>
Date and time of the requested order (ISO format) | Data e hora em que o pedido foi efetuado (formato ISO) required
</p>

</form>


## api/pedido/{pedido}




> Example request:

```bash
curl -X PATCH \
    "http://127.0.0.1:8000/api/pedido/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"total":"et","data":"non"}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/pedido/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "total": "et",
    "data": "non"
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PATCHapi-pedido--pedido-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-pedido--pedido-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-pedido--pedido-"></code></pre>
</div>
<div id="execution-error-PATCHapi-pedido--pedido-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-pedido--pedido-"></code></pre>
</div>
<form id="form-PATCHapi-pedido--pedido-" data-method="PATCH" data-path="api/pedido/{pedido}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-pedido--pedido-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-pedido--pedido-" onclick="tryItOut('PATCHapi-pedido--pedido-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-pedido--pedido-" onclick="cancelTryOut('PATCHapi-pedido--pedido-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-pedido--pedido-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/pedido/{pedido}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>pedido</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="pedido" data-endpoint="PATCHapi-pedido--pedido-" data-component="url" required  hidden>
<br>
Id of the order you're updating | Id do pedido a ser atualizado
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>total</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="total" data-endpoint="PATCHapi-pedido--pedido-" data-component="body"  hidden>
<br>
New order's total value | Novo valor total do pedido required
</p>
<p>
<b><code>data</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="data" data-endpoint="PATCHapi-pedido--pedido-" data-component="body"  hidden>
<br>
New date and time of the requested order (ISO format) | Nova data e hora em que o pedido foi efetuado (formato ISO) required
</p>

</form>


## api/pedido/{pedido}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/pedido/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/pedido/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-pedido--pedido-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-pedido--pedido-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-pedido--pedido-"></code></pre>
</div>
<div id="execution-error-DELETEapi-pedido--pedido-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-pedido--pedido-"></code></pre>
</div>
<form id="form-DELETEapi-pedido--pedido-" data-method="DELETE" data-path="api/pedido/{pedido}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-pedido--pedido-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-pedido--pedido-" onclick="tryItOut('DELETEapi-pedido--pedido-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-pedido--pedido-" onclick="cancelTryOut('DELETEapi-pedido--pedido-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-pedido--pedido-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/pedido/{pedido}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>pedido</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="pedido" data-endpoint="DELETEapi-pedido--pedido-" data-component="url" required  hidden>
<br>
Id of the order you're removing | Id do pedido a ser removido
</p>
</form>


## api/mais_vendidos




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/mais_vendidos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/mais_vendidos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "nome": "Caixa de leite condensado",
        "vendas": 1
    }
]
```
<div id="execution-results-GETapi-mais_vendidos" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-mais_vendidos"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-mais_vendidos"></code></pre>
</div>
<div id="execution-error-GETapi-mais_vendidos" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-mais_vendidos"></code></pre>
</div>
<form id="form-GETapi-mais_vendidos" data-method="GET" data-path="api/mais_vendidos" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-mais_vendidos', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-mais_vendidos" onclick="tryItOut('GETapi-mais_vendidos');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-mais_vendidos" onclick="cancelTryOut('GETapi-mais_vendidos');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-mais_vendidos" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/mais_vendidos</code></b>
</p>
</form>


## api/vendas




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/vendas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/vendas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "produto_id": 1,
        "pedido_id": 1,
        "total": "3.00",
        "quantidade": 2,
        "created_at": "2021-05-26T20:13:29.000000Z",
        "updated_at": "2021-05-26T20:13:29.000000Z"
    }
]
```
<div id="execution-results-GETapi-vendas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-vendas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-vendas"></code></pre>
</div>
<div id="execution-error-GETapi-vendas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-vendas"></code></pre>
</div>
<form id="form-GETapi-vendas" data-method="GET" data-path="api/vendas" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-vendas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-vendas" onclick="tryItOut('GETapi-vendas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-vendas" onclick="cancelTryOut('GETapi-vendas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-vendas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/vendas</code></b>
</p>
</form>


## api/venda/{id}




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/venda/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/venda/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "id": 1,
    "produto_id": 1,
    "pedido_id": 1,
    "total": "3.00",
    "quantidade": 2,
    "created_at": "2021-05-26T20:13:29.000000Z",
    "updated_at": "2021-05-26T20:13:29.000000Z"
}
```
<div id="execution-results-GETapi-venda--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-venda--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-venda--id-"></code></pre>
</div>
<div id="execution-error-GETapi-venda--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-venda--id-"></code></pre>
</div>
<form id="form-GETapi-venda--id-" data-method="GET" data-path="api/venda/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-venda--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-venda--id-" onclick="tryItOut('GETapi-venda--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-venda--id-" onclick="cancelTryOut('GETapi-venda--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-venda--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/venda/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-venda--id-" data-component="url" required  hidden>
<br>
Id of the sale you're looking for | Id da venda a ser pesquisada
</p>
</form>


## api/venda




> Example request:

```bash
curl -X POST \
    "http://127.0.0.1:8000/api/venda" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"produto_id":7,"pedido_id":12,"total":"assumenda","quantidade":15}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/venda"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "produto_id": 7,
    "pedido_id": 12,
    "total": "assumenda",
    "quantidade": 15
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-venda" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-venda"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-venda"></code></pre>
</div>
<div id="execution-error-POSTapi-venda" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-venda"></code></pre>
</div>
<form id="form-POSTapi-venda" data-method="POST" data-path="api/venda" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-venda', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-venda" onclick="tryItOut('POSTapi-venda');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-venda" onclick="cancelTryOut('POSTapi-venda');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-venda" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/venda</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>produto_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="produto_id" data-endpoint="POSTapi-venda" data-component="body" required  hidden>
<br>
Product's id | Id do produto
</p>
<p>
<b><code>pedido_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="pedido_id" data-endpoint="POSTapi-venda" data-component="body" required  hidden>
<br>
Order's id | Id do pedido
</p>
<p>
<b><code>total</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="total" data-endpoint="POSTapi-venda" data-component="body" required  hidden>
<br>
Sale's total | Total da venda
</p>
<p>
<b><code>quantidade</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="quantidade" data-endpoint="POSTapi-venda" data-component="body" required  hidden>
<br>
Amount of products bought | Quantidade de produtos comprados
</p>

</form>


## api/venda/{pedido_item}




> Example request:

```bash
curl -X PATCH \
    "http://127.0.0.1:8000/api/venda/delectus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"produto_id":6,"pedido_id":15,"total":"nulla","quantidade":17}'

```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/venda/delectus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "produto_id": 6,
    "pedido_id": 15,
    "total": "nulla",
    "quantidade": 17
}

fetch(url, {
    method: "PATCH",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PATCHapi-venda--pedido_item-" hidden>
    <blockquote>Received response<span id="execution-response-status-PATCHapi-venda--pedido_item-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-venda--pedido_item-"></code></pre>
</div>
<div id="execution-error-PATCHapi-venda--pedido_item-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-venda--pedido_item-"></code></pre>
</div>
<form id="form-PATCHapi-venda--pedido_item-" data-method="PATCH" data-path="api/venda/{pedido_item}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PATCHapi-venda--pedido_item-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PATCHapi-venda--pedido_item-" onclick="tryItOut('PATCHapi-venda--pedido_item-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PATCHapi-venda--pedido_item-" onclick="cancelTryOut('PATCHapi-venda--pedido_item-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PATCHapi-venda--pedido_item-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/venda/{pedido_item}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>pedido_item</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="pedido_item" data-endpoint="PATCHapi-venda--pedido_item-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>pedidoItem</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="pedidoItem" data-endpoint="PATCHapi-venda--pedido_item-" data-component="url" required  hidden>
<br>
Id of the sale you're updating | Id da venda a ser atualizada
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>produto_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="produto_id" data-endpoint="PATCHapi-venda--pedido_item-" data-component="body" required  hidden>
<br>
New product's id | Novo id do produto
</p>
<p>
<b><code>pedido_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="pedido_id" data-endpoint="PATCHapi-venda--pedido_item-" data-component="body" required  hidden>
<br>
New order's id | Novo id do pedido
</p>
<p>
<b><code>total</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="total" data-endpoint="PATCHapi-venda--pedido_item-" data-component="body" required  hidden>
<br>
New sale's total | Novo total da venda
</p>
<p>
<b><code>quantidade</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="quantidade" data-endpoint="PATCHapi-venda--pedido_item-" data-component="body" required  hidden>
<br>
New amount of products bought | Nova quantidade de produtos comprados
</p>

</form>


## api/venda/{pedido_item}




> Example request:

```bash
curl -X DELETE \
    "http://127.0.0.1:8000/api/venda/nesciunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/venda/nesciunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-venda--pedido_item-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-venda--pedido_item-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-venda--pedido_item-"></code></pre>
</div>
<div id="execution-error-DELETEapi-venda--pedido_item-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-venda--pedido_item-"></code></pre>
</div>
<form id="form-DELETEapi-venda--pedido_item-" data-method="DELETE" data-path="api/venda/{pedido_item}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-venda--pedido_item-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-venda--pedido_item-" onclick="tryItOut('DELETEapi-venda--pedido_item-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-venda--pedido_item-" onclick="cancelTryOut('DELETEapi-venda--pedido_item-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-venda--pedido_item-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/venda/{pedido_item}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>pedido_item</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="pedido_item" data-endpoint="DELETEapi-venda--pedido_item-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>pedidoItem</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="pedidoItem" data-endpoint="DELETEapi-venda--pedido_item-" data-component="url" required  hidden>
<br>
Id of the sale you're removing | Id da venda a ser removida
</p>
</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v8.43.0 (PHP v8.0.6)
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>



