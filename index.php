<style> 
* { font-family: Arial, sans-serif }
code { background-color: lightgrey; font-family: monospace }
.get { 
    background-color: #15701b;
    border-radius: 5%;
    padding: 3px;
    color: white;
    font-weight: bold;
}

.post { 
    background-color: #17209c;
    border-radius: 5%;
    padding: 3px;
    color: white;
    font-weight: bold;
}

.title { 
    font-size: 150%
}
</style>
<h1>sudocoin API</h1>
i made an api so you can actually access some data without needing my password (lol) <br>
v1 endpoints: <code>/api/v1/phpFileName.php</code> <br>
some endpoints are at different pages, eg <code>createitem.php</code> is not located in <code>/api</code>, it is <code>/createitem.php</code>. <br>
the documentation for the mining and transfer server (eg. if you want to write a custom client) is <a href="wsdocs.php">here</a>.

<Br> <br>

<code class="title">getStatistics.php</code> <span>(v1)</span> <span class="get">GET</span>  <br>
Return: <code>configId|coinsMined|coinCap|richestUser|richestUsersCoinCount</code> <br> <br>

<code class="title">getStoreItems.php</code> <span>(v1)</span> <span class="get">GET</span>  <br>
Return: <code>itemName,amountToCharge,sellerId,stock,itemId,category,contactSeller,descr|someOtheriItemName,</code> and so on. <br> <br>

<code class="title">getStoreItem.php</code> <span>(v1)</span> <span class="get">GET WITH QUERY</span>  <br>
Query required: <code>getStoreItem.php?itemId</code> <Br>
Return: <code>itemName,amountToCharge,sellerId,stock,itemId,category,contactSeller,descr</code><br>
Note: if you get returned -1, you entered no query or an invalid query. <br> <br>

<code class="title">getTransactions.php</code> <span>(v1)</span> <span class="get">GET</span>  <br>
Return: <code>sendingUserId,recievingUserId,amountTransferred,transactionId,reason|someSendingUserId,</code> and so on. <br> <br>

<code class="title">getTransaction.php</code> <span>(v1)</span> <span class="get">GET WITH QUERY</span>  <br>
Query required: <code>getStoreItem.php?transactionId</code> <Br>
Return: <code>sendingUserId,recievingUserId,amountTransferred,transactionId,reason</code><br>
Note: if you get returned -1, you entered no query or an invalid query. <br> <br>

<code class="title">getUsers.php</code> <span>(v1)</span> <span class="get">GET</span>  <br>
Return: <code>userId,coins|someOtherUserId,</code> and so on. <br> <br>

<code class="title">getUser.php</code> <span>(v1)</span> <span class="get">GET WITH QUERY</span>  <br>
Query required: <code>getStoreItem.php?userId</code> <Br>
Return: <code>userId,coin</code><br>
Note: if you get returned -1, you entered no query or an invalid query. <br> <br>

<code class="title">createitem.php</code> <span>(create shop item) (/createitem.php)</span> <span class="post">POST</span>  <br>
Parameters required: <br> <code>itemName (string)<br>amountToChange (float)<br>stock (int)<br>contactSeller (string)<br>descr (string)<br>category (string)<br>password (string)</code> <Br>
Return: <code>ok i think it worked</code> and you should see the item in the store<br>
Note: This is <u>not an official API endpoint</u>, this is just something you can do using the page.<br> <br>

<code class="title">manageitem.php</code> <span>(manage shop item) (/manageitem.php)</span> <span class="post">POST</span>  <br>
Parameters required: <br> <code>itemId (int)<br>itemName (string)<br>amountToChange (float)<br>stock (int)<br>contactSeller (string)<br>descr (string)<br>category (string)<br>password (string)</code> <Br>
Return: <code>ok i think it worked</code> and you should see the item updated in the store<br>
Note: This is <u>not an official API endpoint</u>, this is just something you can do using the page.<br> <br>

<code class="title">checkId.php</code> <span>(v1)</span> <span class="post">POST</span>  <br>
Parameters required: <br> <code>password (string)</code> <Br>
Return: <code>yourid</code> or <code>-1</code> <br> <br>