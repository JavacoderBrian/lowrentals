<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/menu.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-2.1.1.js" type="text/javascript"></script>
        <link rel="stylesheet" href="../widgets/jqwidgets/styles/jqx.base.css" type="text/css" />
        <link rel="stylesheet" href="../widgets/jqwidgets/styles/jqx.classic.css" type="text/css" />        
        <script type="text/javascript" src="../widgets/jqwidgets/jqxcore.js"></script>
        <script type="text/javascript" src="../widgets/jqwidgets/jqxbuttons.js"></script>
        <script type="text/javascript" src="../widgets/jqwidgets/jqxscrollbar.js"></script>
        <script type="text/javascript" src="../widgets/jqwidgets/jqxmenu.js"></script>        
        <script type="text/javascript" src="../widgets/jqwidgets/jqxdata.js"></script>
        <script type="text/javascript" src="../widgets/jqwidgets/jqxgrid.js"></script>
        <script src="../widgets/jqwidgets/jqxgrid.edit.js" type="text/javascript"></script>
        <script type="text/javascript" src="../widgets/jqwidgets/jqxgrid.selection.js"></script>        
        <script src="../widgets/jqwidgets/jqxlistbox.js" type="text/javascript"></script>
        <script src="../widgets/jqwidgets/jqxgrid.pager.js" type="text/javascript"></script>
        <script src="../widgets/jqwidgets/jqxdropdownlist.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var source = {
                    datatype: "json",
                    datafields: [
                        {name: 'start', type: 'string'},
                        {name: 'end', type: 'string'},
                        {name: 'id', type: 'string'},
                        {name: 'description', type: 'string'},
                        {name: 'place', type: 'string'},
                        {name: 'subject', type: 'string'},
                        {name: 'calendar', type: 'string'},
                        {name: 'active', type: 'string'}
                    ],
                    cache: false,
                    id: 'id',
                    url: 'data.php',
                    updaterow: function (rowid, rowdata, commit) {
                        var data = "update=true&active=" + rowdata.active + "&start=" + rowdata.start + "&end=" + rowdata.end + "&description=" + rowdata.description + "&place=" + rowdata.place + "&subject=" + rowdata.subject + "&calendar=" + rowdata.calendar + "&id=" + rowdata.id;
                        $.ajax({
                            dataType: 'json',
                            url: 'data.php',
                            data: data,
                            success: function (data, status, xhr) {
                                commit(true);
                            }
                        });
                    }
                };
                var dataAdapter = new $.jqx.dataAdapter(source);
                $('#jqxgrid').jqxGrid(
                        {
                            width: 1400,
                            height: 400,
                            selectionmode: 'singlecell',
                            editable: true,
                            autoheight:true,
                            pageable:true,
                            virtualmode:true,
                            source: dataAdapter,
                            rendergridrows: function(obj)
                            {
                                return obj.data;
                            },
                            columns: [
                                {text: 'ID', editable: false, datafield: 'id', width: 100},
                                {text: 'From', datafield: 'start', width: 180},
                                {text: 'To', datafield: 'end', width: 180},
                                {text: 'Email', datafield: 'place', width: 250},
                                {text: 'Name', datafield: 'subject', width: 250},
                                {text: 'Suite', datafield: 'calendar', width: 200},
                                {text: 'Active', datafield: 'active', width: 100}
                            ]
                        });
            });
        </script>
        <title>Data editing</title>
    </head>
    <body class="default">          
        <?php include '../header.php'; ?>
        <div class="container">
            <div id="jqxgrid"></div></div>
    </body>
</html>
