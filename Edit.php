<?php 
include('connect.php');
$data=$_REQUEST['data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<div class="container">
    <div class="row clearfix">
		<div class="col-md-12 column">
			<table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							No.
						</th>
						<th class="text-center">
							ชื่อ
						</th>
						<th class="text-center">
							ที่อยู่
						</th>
						<th class="text-center">
							อายุ
						</th>
                        <th class="text-center">
							ความสนใจ
						</th>
                        <th class="text-center">
							Action
						</th>
					</tr>
				</thead>
				<tbody>
                <?php
            $sql="SELECT * FROM CUSTOMERS WHERE ID ='$data'";
            $obj = oci_parse($conn, $sql);
            oci_execute($obj,OCI_DEFAULT);
            $row = oci_fetch_row($obj);
            ?>
			<tr id='addr0'>
				<td>
				<?php echo $row[0]?>
				</td>
				<td>
			    <input required type="text" name="name" id="name"  placeholder="<?php echo $row[1]?>" value="<?php echo $row[1]?>" class="form-control"/>
				</td>
				<td>
                <select required class="form-control" name="address" id="address">
                <option value="<?php echo $row[2] ?>" selected><?php echo $row[2] ?></option>
                <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                <option value="กระบี่">กระบี่ </option>
                <option value="กาญจนบุรี">กาญจนบุรี </option>
                <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                <option value="กำแพงเพชร">กำแพงเพชร </option>
                <option value="ขอนแก่น">ขอนแก่น</option>
                <option value="จันทบุรี">จันทบุรี</option>
                <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                <option value="ชัยนาท">ชัยนาท </option>
                <option value="ชัยภูมิ">ชัยภูมิ </option>
                <option value="ชุมพร">ชุมพร </option>
                <option value="ชลบุรี">ชลบุรี </option>
                <option value="เชียงใหม่">เชียงใหม่ </option>
                <option value="เชียงราย">เชียงราย </option>
                <option value="ตรัง">ตรัง </option>
                <option value="ตราด">ตราด </option>
                <option value="ตาก">ตาก </option>
                <option value="นครนายก">นครนายก </option>
                <option value="นครปฐม">นครปฐม </option>
                <option value="นครพนม">นครพนม </option>
                <option value="นครราชสีมา">นครราชสีมา </option>
                <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                <option value="นครสวรรค์">นครสวรรค์ </option>
                <option value="นราธิวาส">นราธิวาส </option>
                <option value="น่าน">น่าน </option>
                <option value="นนทบุรี">นนทบุรี </option>
                <option value="บึงกาฬ">บึงกาฬ</option>
                <option value="บุรีรัมย์">บุรีรัมย์</option>
                <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                <option value="ปทุมธานี">ปทุมธานี </option>
                <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                <option value="ปัตตานี">ปัตตานี </option>
                <option value="พะเยา">พะเยา </option>
                <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                <option value="พังงา">พังงา </option>
                <option value="พิจิตร">พิจิตร </option>
                <option value="พิษณุโลก">พิษณุโลก </option>
                <option value="เพชรบุรี">เพชรบุรี </option>
                <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                <option value="แพร่">แพร่ </option>
                <option value="พัทลุง">พัทลุง </option>
                <option value="ภูเก็ต">ภูเก็ต </option>
                <option value="มหาสารคาม">มหาสารคาม </option>
                <option value="มุกดาหาร">มุกดาหาร </option>
                <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                <option value="ยโสธร">ยโสธร </option>
                <option value="ยะลา">ยะลา </option>
                <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                <option value="ระนอง">ระนอง </option>
                <option value="ระยอง">ระยอง </option>
                <option value="ราชบุรี">ราชบุรี</option>
                <option value="ลพบุรี">ลพบุรี </option>
                <option value="ลำปาง">ลำปาง </option>
                <option value="ลำพูน">ลำพูน </option>
                <option value="เลย">เลย </option>
                <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                <option value="สกลนคร">สกลนคร</option>
                <option value="สงขลา">สงขลา </option>
                <option value="สมุทรสาคร">สมุทรสาคร </option>
                <option value="สมุทรปราการ">สมุทรปราการ </option>
                <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                <option value="สระแก้ว">สระแก้ว </option>
                <option value="สระบุรี">สระบุรี </option>
                <option value="สิงห์บุรี">สิงห์บุรี </option>
                <option value="สุโขทัย">สุโขทัย </option>
                <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                <option value="สุรินทร์">สุรินทร์ </option>
                <option value="สตูล">สตูล </option>
                <option value="หนองคาย">หนองคาย </option>
                <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                <option value="อุดรธานี">อุดรธานี </option>
                <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                <option value="อุทัยธานี">อุทัยธานี </option>
                <option value="อุบลราชธานี">อุบลราชธานี</option>
                <option value="อ่างทอง">อ่างทอง </option>
                </select>
                </td>
						<td>
						<input required type="number" name="age" id="age" placeholder="<?php echo $row[3]?>" value="<?php echo $row[3]?>" class="form-control" onKeyPress="if(this.value.length==2) return false;"/>
						</td>
                        <td>
                        <select required class="form-control" name="attend" id="attend" >
                            <option value="<?php echo $row[4] ?>" selected><?php echo $row[4] ?></option>
                            <?php 
                                include('connect.php');
                                $sql="SELECT * FROM attend";
                                $obj = oci_parse($conn, $sql);
                                oci_execute($obj,OCI_DEFAULT);
                                while ($row = oci_fetch_array ($obj, OCI_ASSOC)) {?>
                                    <option value="<?php echo $row['ATTEND'];?>"><?php echo $row['ATTEND'];?></option>
                                    <?php }
                            ?>
      				    </select>
						</td>
                        <td>
                        <button type="button" class="btn btn-primary" pull-left onclick="Update()">UPDATE</button>
                        </td>
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>

<script>
    function Update(){
        var data="<?php echo $data; ?>";
        var name=document.getElementById("name").value;
        var address=document.getElementById("address").value;
        var age=document.getElementById("age").value;
        var attend=document.getElementById("attend").value;

        $.ajax({
        type: "POST",
        url: "Edit_backend.php",
        data: {data:data,name:name,address:address,age:age,attend:attend},
        success: function(data){
        console.log(data);
        alert("Successfully Update");
        window.location.href = 'home.php';
        },
        error: function(xhr, status, error){
        console.error(xhr);
        }
    });

    //window.open("Edit_backend.php?data="+data +"&name="+name +"&address="+address 
    //+"&age="+age +"&attend="+attend , "_blank");

    }
</script>