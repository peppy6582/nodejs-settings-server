<body>
Welcome
<%
response.write(request.querystring("username"))
response.write(" " & request.querystring("password"))
%>
</body>