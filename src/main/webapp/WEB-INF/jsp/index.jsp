<%--<jsp:useBean id="user" scope="request" type="com.smart.pojo.User"/>--%>
<%@ page contentType="text/html; charset=UTF-8" pageEncoding="UTF-8" %>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <title>首页</title>
    <jsp:include page="common/head.jsp"/>
</head>
<body>

<jsp:include page="common/navbar.jsp"/>

微博总数： ${count}

<link href="<c:url value="/resource/css/index.css"/>" rel="stylesheet">
<div class="container ">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-xs-0"></div>
        <div class="col-lg-8 col-md-8 col-xs-12">
            <br><br>
            <div class="media">
                <div class="media-left">
                    <a>
                        <img src="${pageContext.request.contextPath}/resource/pics/1.png"
                             style="width: 100px;height:100px" alt="">
                    </a>
                </div>
                <div class="media-body">
                    <a href="" class="post-title"
                       style="font-size: 25px">title</a>
                    <br>
                    <div> content
                    </div>
                </div>
            </div>
            <br><br>
        </div>
        <div class="col-lg-2 col-md-2 col-xs-0"></div>
    </div>
</div>

<jsp:include page="common/foot.jsp"/>

</body>
</html>

