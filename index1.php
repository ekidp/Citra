
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inventory</title>
<link rel="stylesheet" type="text/css" href="mycss/index.css">
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/panel.css" />
<script type="text/javascript" src="jquery_easyui/jquery.min.js"></script>
<script type="text/javascript" src="jquery_easyui/jquery.easyui.min.js"></script>
<script>
function addTab(title, url){
			if ($('#tt').tabs('exists', title)){
				$('#tt').tabs('select', title);
			} else {
				var content = '<iframe scrolling="auto" frameborder="0"  src="'+url+'" style="width:100%;height:100%;"></iframe>';
				$('#tt').tabs('add',{
					title:title,
					content:content,
					closable:true
				});
			}
		}
	</script>
</head>

<body>
<div id="header"><H1> <center><font size="100" color="skyblue">INVENTORY </font></center></h1>
</div>
<div id="navigasi">
<div style="width:200px;height:auto;padding:5px;float:left; margin-right:10px;background:#7190E0; ">
<div class="easyui-panel" title="MASTER" collapsed="true" collapsible="true" style="width:200px;height:auto;padding:10px;">
<a href="#" class="easyui-linkbutton" iconCls="icon-trolly" plain="true" onClick="addTab('Master Barang','masterbar.php')">Master Barang</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-trolly" plain="true" onClick="addTab('Master Ruangan','masterru.php')">Master Ruangan</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-trolly" plain="true" onClick="addTab('Master Satuan','satuan.php')">Master Satuan</a><br />
</div>
<br/>
<div class="easyui-panel" title="MENU" collapsible="true" style="width:200px;height:auto;padding:10px;">
<a href="#" class="easyui-linkbutton" iconCls="icon-truck" plain="true" onClick="addTab('Barang','barang.php')">Barang</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-stack-f" plain="true" onClick="addTab('Stok','stok.php')">Stok</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-stack-e" plain="true" onClick="addTab('Ruangan','ruangan.php')">Ruangan</a><br />
</div><br />
<div class="easyui-panel" title="LAPORAN" collapsible="true"  style="width:200px;height:auto;padding:10px;">
<a href="#" class="easyui-linkbutton" iconCls="icon-report1" plain="true" onClick="addTab('Laporan Penjualan','laporan/barang/pilih_lap.php')">Barang</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-report2" plain="true" onClick="addTab('Laporan Barang Masuk','laporan/ruangan/pilih_lap.php')">Ruangan</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-report3" plain="true" onClick="addTab('Laporan Barang Keluar','laporan/stok/pilih_lap.php')">Stok</a><br />

</div>
<div class="easyui-panel" title="AKSES" collapsible="true"  style="width:200px;height:auto;padding:10px;">
<a href="logout.php" class="easyui-linkbutton" iconCls="icon-logout" plain="true">Logout</a>
</div>
</div>
</div>
<div id="isi">
<div id="tt" class="easyui-tabs" style="height:500px;">
<div title="Home" style="padding-top:;  text-align:left; background-image:url(mycss/images/.png);  background-repeat:no-repeat; " >


</div>

</div>

</div>

</body>
</html>

