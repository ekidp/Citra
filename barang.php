<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>barang</title>
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/color.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
</head>
<body>
	<h2>INVENTORY</h2>
	<p>Click the buttons on datagrid toolbar to do crud actions.</p>
	
	<table id="dg" title="Barang" class="easyui-datagrid" style="width:700px;height:250px"
			url="get_bar.php"	
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="kodetransaksi" width="50">Kode Transaksi</th>
				<th field="kodebarang" width="50">Kode Barang</th>
				<th field="kodesatuan" width="50">Kode Satuan</th>
				<th field="namabarang" width="50">Nama Barang</th>
				<th field="jumlah" width="50">Jumlah</th>
				<th field="catatan" width="50">Catatan</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove</a>
	</div>
	
	<div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Information</div>
		<form id="fm" method="post" novalidate>
		
				<input name="kodetransaksi" type="hidden">
				
			<div class="fitem">
				<label>Kode Barang:</label>
				<input name="kodebarang" class="easyui-textbox" required="true">
			</div>
			<div class="fitem">
				<label>Kode Satuan:</label>
				<input name="kodesatuan" class="easyui-textbox" required="true">
			</div>
			<div class="fitem">
				<label>Nama Barang:</label>
				  <input name="namabarang" class="easyui-textbox" required="true">
			</div>
			<div class="fitem">
				<label>Jumlah:</label>
				<input name="jumlah" class="easyui-numberbox" value="100" data-options="min:0,precision:0">
			</div>
			<div class="fitem">
				<label>Catatan:</label>
				<input name="catatan" class="easyui-textbox">
			</div>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
	</div>
	<script type="text/javascript">
		var url;
		function newUser(){
			$('#dlg').dialog('open').dialog('setTitle','New User');
			$('#fm').form('clear');
			url = 'save_bar.php';
		}
		function editUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Edit User');
				$('#fm').form('load',row);
				url = 'update_bar.php?kodetransaksi='+row.kodetransaksi;
			}
		}
		function saveUser(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.errorMsg){
						$.messager.show({
							title: 'Error',
							msg: result.errorMsg
						});
					} else {
						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the user data
					}
				}
			});
		}
		function destroyUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Yakin ate dihapus?',function(r){
					if (r){
						$.post('destroy_bar.php',{kodetransaksi:row.kodetransaksi},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.errorMsg
								});
							}
						},'json');
					}
				});
			}
		}
	</script>
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
		.fitem input{
			width:160px;
		}
	</style>
</body>
</html>