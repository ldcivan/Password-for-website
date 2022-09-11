# Password-for-website
一个低保密度的网页密码验证系统，基于cookie，带假页面，主要用于应付一般的网安例行审查
<h3>各个页面作用</h3>
1.passgive.php：密钥（其实只有一对）基于cookie分发，如果输入了所谓“访客密码”则会加入特别标识，未来访问网页时将重定向至假网页<br>
2.passcheck.php：读取cookie并判断密钥是否与分发的相同；未有cookie记录的，重定向至passgive.php；对于有密钥但标识为“访客”的，重定向到假网页<br>
3.new.html：被加密网页<br>
4.building.php：假网页<br>
<h3>使用方法</h3>
将
<code>
<script type="text/javascript" src="/passport/passcheck.php"></script>
</code>
添加到head中即可
