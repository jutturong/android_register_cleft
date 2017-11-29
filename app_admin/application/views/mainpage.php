<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?=$title?></title>


        <?=$this->load->view("import_")?>
        
        <script type="text/javascript">
           $(function(){
               //----------- progressbar-------------
               var win=$.messager.progress({
                     title:'Progress Loading',
                     msg:'Loading',
                   
               });
               setTimeout(function(){
                    $.messager.progress('close');
               },3000);
               //----------- progressbar-------------
               
                //  txt_id_patient
                                   $('#txt_id_patient').textbox('setValue','');
                                   $('#txt_name').textbox('setValue','');
                                    $('#txt_lastname').textbox('setValue',''); 
                                    $('#txt_id_card').textbox('setValue',''); 
                                    $('#txt_telephone').textbox('setValue','');
                                    //txt_id_sex
                                    $('#txt_id_sex').textbox('setValue','');
                                   
                                    $('#id_sex_m').attr('checked',false);
                                    $('#id_sex_w').attr('checked',false);
                                   
                                      $('#txt_birthdate').textbox('setValue', '' );
                                     $('#txt_address').textbox('setValue', '' );
                                     
                                    // $('#txt_province_id').textbox('setValue', '' );
                                     //cmb_province_id
                                     $('#cmb_province_id').textbox('setValue', '' );
                                     
                                     
                                      $('#txt_diagnosis').textbox('setValue', '' );
                                      $('#txt_detail_diagnosis').textbox('setValue', '' );
                                       $('#txt_informative_name').textbox('setValue', '' );
                                      $('#txt_informative_lastname').textbox('setValue', '' );      
                                      $('#txt_informative_tel').textbox('setValue','' );
                                      
                                      $('#dg_main1').datagrid('reload'); 
           });
        </script>
        
       
    </head>  
    
    <body>
       

        
        <div class="easyui-panel"  id="dia_updatedata" 
             
             
             data-options="

             /*
             buttons:[
                { text:'Update',iconCls:'icon-edit',size:'large',  handler:function()
                        { 
                              //alert('t');  
                            //  var   row=$('#dia_updatedata').
                            
                             var   row = $('#dg_main1').datagrid('getSelected');
                                   if (row)
                                   {
                                       //alert('t');
                                       var   id_patient=row.id_patient;
                                       alert( id_patient );
                                       
                                       
                                   }
     
                           
                         }  },
                {  text:'Close',iconCls:'icon-cancel',size:'large',  handler:function()
                         { 
                             //alert('t'); 
                             $('#dia_updatedata').dialog('close');
                         }   },
             ]
             */
             
             "
             style="width: 750px ;height: 550px; margin-left: 15px; " 
             >
            <div class="easyui-panel"  style="margin-top: 10px;margin-left: 10px;width: 600px; padding: 10px; " >
                
                                
                 <form id="fr_main1"   method="post"  enctype="multipart/form-data"  novalidate="novalidate" >
                             
                     <div style="padding:3px;"  >  
                         <span>ID :</span>
                        <input class="easyui-textbox"  name="txt_id_patient"  id="txt_id_patient"   readonly="true"   data-options=" readonly:true,  "  style="   width :50px;height:30px;" />
                     </div>
                     
                <div style="padding:3px;"  >         
                <span>  ชื่อผู้ป่วย - นามสกุลผู้ป่วย :</span> 
                <input class="easyui-textbox"  name="txt_name"  id="txt_name"  style="   width :150px;height:30px;" />
                -
                <input class="easyui-textbox"  name="txt_lastname"  id="txt_lastname"  style="  width :200px;height:30px;" />
                </div>
                     
                <div style="padding:3px;"  >         
                <span>  เลขบัตรประชาชน :</span> 
                <input class="easyui-textbox"  name="txt_id_card"  id="txt_id_card"  style=" width :100px;height:30px;" />
                 <span>  เบอร์โทรศัพท์ :</span> 
                 
                <input class="easyui-textbox"  name="txt_telephone"  id="txt_telephone"  style=" width :150px;height:30px;" />
                
                
                 <span>  เพศ :</span> 
                 
            
                
                <input  type="radio"    name="r_id_sex"    id="id_sex_m"  value="1"  /> ชาย
                
                 <input  type="radio"    name="r_id_sex"    id="id_sex_w"  value="2"  /> หญิง
                
                
                </div>
                     
                     
                <div style="padding:3px;"  >   
                           <span>  วัน-เดือน-ปี เกิด :</span> 
                           <input class="easyui-datebox"  name="txt_birthdate"  id="txt_birthdate"  style=" width :150px;  height:30px; "   />
                           
                </div>
                     
               
                <div style="padding:3px;"  >   
                           <span>  ที่อยู่ปัจจุบัน(ตามทะเบียนบ้าน) :</span> 
                           <input class="easyui-textbox"  name="txt_address"  id="txt_address"  style=" width :300px;  height:50px; "  multiline="true"  />
                           
                </div>
                     
                         <div style="padding:3px;"  >   
                           <span>  จังหวัดเกิด :</span> 
                           
                           
                           <input class="easyui-combobox"  name="cmb_province_id"  id="cmb_province_id"   data-options="  
                                  url:'<?=base_url()?>index.php/welcome/json_province',
                                  valueField:'PROVINCE_ID',
                                  textField:'PROVINCE_NAME',
                                  "    style=" width :150px;  height:40px; "  />
                           
                </div>    
                     
                 
                     
               <div style="padding:3px;"  >   
                           <span>  ภาวะโรคร่วม :</span> 
                           <input class="easyui-textbox"  name="txt_diagnosis"  id="txt_diagnosis"  style=" width :400px;  height:40px; "  multiline="true"  />
                           
                </div>  
                     
                            <div style="padding:3px;"  >   
                           <span>  ระบุภาวะโรคร่วม อื่นๆ  :</span> 
                           <input class="easyui-textbox"  name="txt_detail_diagnosis"  id="txt_detail_diagnosis"  style=" width :400px;  height:40px; "  multiline="true"  />
                           
                </div>  
                 
            
       
                <div style="padding:3px;"  >   
                           <span>  ชื่อผู้ให้ข้อมูล  :</span> 
                           <input class="easyui-textbox"  name="txt_informative_name"  id="txt_informative_name"  style=" width :150px;  height:40px; "   />
                           
                </div>
                
                <div style="padding:3px;"  >   
                           <span>  นามสกุลผู้ให้ข้อมูล  :</span> 
                           <input class="easyui-textbox"  name="txt_informative_lastname"  id="txt_informative_lastname"  style=" width :200px;  height:40px; "   />
                           
                </div>
                     
                <div style="padding:3px;"  >   
                           <span>  เบอร์โทรศัพท์ผู้ให้ข้อมูล  :</span> 
                           <input class="easyui-textbox"  name="txt_informative_tel"  id="txt_informative_tel"  style=" width :200px;  height:40px; "   />
                           
                </div>
                
                     <div style="padding: 3px;">
                         <a class="easyui-linkbutton"  href="javascript:void(0)"  
                            data-options=" iconCls:'icon-save',size:'large',
                            
                            "
                            onclick="
                                javascript:
                                    $(function(){
                                        var   url= '<?=base_url()?>index.php/welcome/update_patient';
                                        //alert(url);
                                             $.ajax({
                                                 url:url,
                                                // dataType:'text',
                                                   dataType:'json',
                                                 data:$('#fr_main1').serialize(),
                                                 method:'post',
                                                 
                                             }).done(function(data)
                                             {
                                                   //alert(data);
                                                   var  success= data.success;
                                                   //alert(success);
                                                   if( success == 1)
                                                   {
                                                         $.messager.alert('สถานะการแก้ไขข้อมูลสำเร็จ','แก้ไขข้อมูลแล้ว','info');
                                                         $('#dg_main1').datagrid('reload');
                                                   }
                                                   else if( success == 0)
                                                   {
                                                         $.messager.alert('สถานะการแก้ไขข้อมูลผิดพลาด','แก้ไขข้อมูลผิดพลาด','error');
                                                         $('#dg_main1').datagrid('reload');
                                                   }
                                             });
                                        
                                    });
                                    
                              
                            "
                            >Update</a>
                         
                         <a class="easyui-linkbutton"  data-options=" iconCls:'icon-ok',  size:'large',    "  onclick="
                            javascript:
                                    
                                    $(function(){
                                        
                                        //alert('t');
                                        var   url='<?=base_url()?>index.php/welcome/pc_insert_patient';
                                        //alert(url);
                                        
                                        $.ajax({
                                            url:url,
                                            //dataType:'text',
                                            dataType:'json',
                                            data:$('#fr_main1').serialize(),
                                            method:'post',
                                             
                                        }).done(function(data)
                                        {  
                                            
                                              // alert(data); 
                                               var  success= data.success;
                                                   //alert(success);
                                                   if( success == 1)
                                                   {
                                                         $.messager.alert('สถานะการบันทึกข้อมูลสำเร็จ','บันทึกข้อมูลแล้ว','info');
                                                         $('#dg_main1').datagrid('reload');
                                                   }
                                                   else if( success == 0)
                                                   {
                                                         $.messager.alert('สถานะการบันทึกข้อมูลผิดพลาด','บันทึกข้อมูลผิดพลาด','error');
                                                         $('#dg_main1').datagrid('reload');
                                                   }
                                        });
                                        
                                        
                                    });
                            
                            
                            "  >Insert</a>
                         
                         
                     </div> 
                     
                     
                   
                     
                 </form>
                
            </div>
        </div>
        
            
        
          <div class="easyui-panel"  style="margin-left: 10px;margin-top: 10px;">
            
            <div class="easyui-datagrid"  id="dg_main1"  
             data-options="
             url:'<?=base_url()?>index.php/welcome/json_main1',
             rownumbers:true,
             singleSelect:true,
              columns:[[
                         { field:'name', title:'ชื่อผู้ป่วย' ,align:'left' , editor:'text' ,  },
                         { field:'lastname',title:'นามสกุลผู้ป่วย',align:'left' },
                         { field:'id_card',title:'เลขบัตรประชาชน',align:'left' },
                         { field:'telephone',title:'เบอร์โทรศัพท์',align:'left' },
                         { field:'sex_content',title:'เพศ',align:'left' },
                         { field:'birthdate',title:'วัน-เดือน-ปี เกิด',align:'left' },
                         { field:'address',title:'ที่อยู่ปัจจุบัน(ตามทะเบียนบ้าน)',align:'left' },
                      
                         
                         { field:'PROVINCE_NAME',title:'จังหวัดเกิด',align:'left' },
                         
                         
                         { field:'diagnosis',title:'ภาวะโลกร่วม',align:'left' },
                         { field:'detail_diagnosis',title:'ภาวะโลกร่วม อื่นๆ',align:'left' },
                         { field:'info_name',title:'ชื่อผู้ให้ข้อมูล',align:'left' },
                         { field:'informative_lastname',title:'นามสกุลผู้ให้ข้อมูล',align:'left' },
                         { field:'informative_tel',title:'เบอร์โทรศัพท์ผู้ให้ข้อมูล',align:'left' },
                     ]],
                     
                     toolbar:[
                         
                        { text:'Update',iconCls:'icon-save', size:'large', handler:function(data)
                              {
                                    //alert('t');
                                    $('#dia_updatedata').dialog('open');
                                   //  $('#dia_updatedata').window('open');
                                  var  row=$('#dg_main1').datagrid('getSelected');
                                  if( row )
                                  {
                                       var id_patient=row.id_patient;
                                       //alert( id_patient );
                                       $('#txt_id_patient').textbox('setValue',id_patient);
                                       $('#txt_name').textbox('setValue',row.name);
                                       $('#txt_lastname').textbox('setValue',row.lastname);
                                       $('#txt_id_card').textbox('setValue',row.id_card);
                                       $('#txt_telephone').textbox('setValue',row.telephone);

                                       //id_sex_m
                                       //id_sex_w 
                                       var   id_sex=row.id_sex;
                                       //alert( id_sex );
                                       if( id_sex == 1 )
                                       {
                                           //  alert( id_sex );
                                           // $('#id_sex_m').attr('checked',true);
                                            $('#id_sex_m').prop('checked',true);
                                       }
                                       else if(  id_sex  == 2 )
                                       {
                                          //  alert( id_sex );
                                           // $('#id_sex_w').attr('checked',true);
                                           $('#id_sex_w').prop('checked',true); 
                                       }
                                       
                                       var birthdate=row.birthdate;
                                     // alert( birthdate );  //2015-05-29   view
                                       //11/29/2017
                                       
                                       var  res= birthdate.split('-');
                                       //var conv_date =  res[2]+'/'+res[1]+'/'+res[0]; 
                                         var conv_date =  res[1]+'/'+res[2]+'/'+res[0]; 
                                       //alert( conv_date  );
                                       $('#txt_birthdate').datebox('setValue',conv_date);
                                       
                                       $('#txt_address').textbox('setValue',row.address);
                                       
                                       var  province_id=row.province_id;
                                       //alert( province_id );
                                        $('#cmb_province_id').combobox('setValue',province_id);
                                        
                                        $('#txt_diagnosis').textbox('setValue',row.diagnosis);
                                       
                                        $('#txt_detail_diagnosis').textbox('setValue',row.detail_diagnosis);
                                        
                                        $('#txt_informative_name').textbox('setValue',row.info_name);
                                        
                                        $('#txt_informative_lastname').textbox('setValue',row.informative_lastname);
                                        
                                        $('#txt_informative_tel').textbox('setValue',row.informative_tel);
                                  }
                                  
                                   
                                  
                              }
                        },
                        { text:'reload', iconCls:'icon-reload',size:'large', handler:function(){  $('#dg_main1').datagrid('reload');   }  },
                        {  text:'ลบข้อมูล',iconCls:'icon-cancel',size:'large',
                            handler:function(data)
                            {
                                  var  row=$('#dg_main1').datagrid('getSelected');
                                  if( row )
                                  {
                                       var id_patient=row.id_patient;
                                       //alert( id_patient );
                                       
                                       var  url='<?=base_url()?>index.php/welcome/del_main1';
                                       //alert(url);
                                       $.post( url,{id:id_patient },function(data)
                                           {
                                               //alert(data);
                                               if( data == 1 )
                                               {
                                                               $.messager.alert('สถานะการลบข้อมูลสำเร็จ','ลบข้อมูลแล้ว','info');
                                                               $('#dg_main1').datagrid('reload');                                               
                                               }
                                               else if ( data == 0 )
                                               {
                                                               $.messager.alert('สถานะการลบข้อมูลสำเร็จ','ลบข้อมูลแล้ว','error');
                                                               $('#dg_main1').datagrid('reload');
                                               }
                                           } 
                                         );
                                       
                                  }
                            }
                             
                        },
                     ]
                     
             "
             style="width: 1520px;height: auto;"
             >
        </div> 
            
        </div>
       
    </body>
    
</html>    