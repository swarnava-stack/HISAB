<?php
$active_page = 'credit-note-create';
$page_title = 'Add Credit Note';
$company_name = 'M/S JOY GURU RUBBER';
$fy_year = '2026 - 27';

$parties = array(
  array('id'=>'p1','name'=>'Ashoke Trading Co.','gstin'=>'18AAAAA0000A1Z5','address'=>'123, MG Road, Guwahati, Assam, India, 781001','mobile'=>'9876500001'),
  array('id'=>'p2','name'=>'Bharat Rubber Distributors','gstin'=>'19BBBBB1111B2Z6','address'=>'45, Park Street, Kolkata, West Bengal, India, 700016','mobile'=>'9876500002'),
  array('id'=>'p3','name'=>'Diamond Enterprises','gstin'=>'','address'=>'Manubazar Road, South Tripura, Tripura, India, 799143','mobile'=>'9876500003'),
);
$items = array(
  array('id'=>'i1','name'=>'Natural Rubber - Smoked Sheet','uom'=>'u1','price'=>185,'gst'=>18,'hsn'=>'40011010','sku'=>'NR-SS-01','mrp'=>210,'cess'=>0),
  array('id'=>'i2','name'=>'Natural Rubber-Off Sheet','uom'=>'u2','price'=>142,'gst'=>18,'hsn'=>'40011090','sku'=>'NR-OS-02','mrp'=>165,'cess'=>0),
  array('id'=>'i3','name'=>'FIELD COAGULAM','uom'=>'u2','price'=>96,'gst'=>12,'hsn'=>'40012200','sku'=>'FC-03','mrp'=>110,'cess'=>0),
);
$ledgers = array(
  array('id'=>'l1','name'=>'Sale'),
  array('id'=>'l2','name'=>'Purchase'),
  array('id'=>'l3','name'=>'Freight Charges'),
  array('id'=>'l4','name'=>'Packing Charges'),
  array('id'=>'l5','name'=>'Round Off'),
);
$uoms = array(
  array('id'=>'u1','name'=>'PCS-PIECES'),
  array('id'=>'u2','name'=>'KG-KILOGRAMS'),
  array('id'=>'u3','name'=>'BOX-BOX'),
  array('id'=>'u4','name'=>'MT-METRIC TON'),
);
$transporters = array(
  array('id'=>'t1','name'=>'Sharma Roadways'),
  array('id'=>'t2','name'=>'North East Cargo Movers'),
);
$banks = array(
  array('id'=>'b1','name'=>'HDFC Bank - 1234'),
  array('id'=>'b2','name'=>'SBI - 5678'),
);
$categories = array(
  array('id'=>'c1','name'=>'Default Group'),
  array('id'=>'c2','name'=>'Raw Material'),
);
$partyGroups = array(
  array('id'=>'g1','name'=>'Customers'),
  array('id'=>'g2','name'=>'Suppliers'),
);
$brokers = array(
  array('id'=>'br1','name'=>'Rakesh Broking Agency'),
);
$priceLists = array(
  array('id'=>'pl1','name'=>'Standard Price List'),
  array('id'=>'pl2','name'=>'Wholesale Price List'),
);
$states = array(
  'Andhra Pradesh','Arunachal Pradesh','Assam','Bihar','Chhattisgarh','Goa','Gujarat','Haryana',
  'Himachal Pradesh','Jharkhand','Karnataka','Kerala','Madhya Pradesh','Maharashtra','Manipur',
  'Meghalaya','Mizoram','Nagaland','Odisha','Punjab','Rajasthan','Sikkim','Tamil Nadu','Telangana',
  'Tripura','Uttar Pradesh','Uttarakhand','West Bengal','Delhi'
);
$gstRates = array(0,5,12,18,28);
$cessRates = array(0,1,3,5);
$godowns = array(
  array('id'=>'gd1','name'=>'Main Godown'),
  array('id'=>'gd2','name'=>'Warehouse 2'),
);
$quotations = array(
  array('id'=>'q1','number'=>1,'party_id'=>'p1','items'=>array(array('item_id'=>'i1','qty'=>50,'price'=>185)),'terms'=>'Payment within 15 days from invoice date.'),
  array('id'=>'q2','number'=>2,'party_id'=>'p2','items'=>array(array('item_id'=>'i2','qty'=>20,'price'=>142),array('item_id'=>'i3','qty'=>10,'price'=>96)),'terms'=>'Advance 50% required before dispatch.'),
  array('id'=>'q3','number'=>3,'party_id'=>'p3','items'=>array(array('item_id'=>'i1','qty'=>100,'price'=>180)),'terms'=>'Freight charges extra as applicable.'),
);
$invoices = array(
  array('id'=>'inv1','number'=>'MJGRS/26-27/101','party_id'=>'p1','date'=>'2026-08-12','items'=>array(array('item_id'=>'i1','qty'=>10,'price'=>185)),'terms'=>'Payment within 15 days from invoice date.'),
  array('id'=>'inv2','number'=>'MJGRS/26-27/102','party_id'=>'p1','date'=>'2026-08-22','items'=>array(array('item_id'=>'i2','qty'=>20,'price'=>142)),'terms'=>'Payment within 15 days from invoice date.'),
  array('id'=>'inv3','number'=>'MJGRS/26-27/103','party_id'=>'p2','date'=>'2026-09-02','items'=>array(array('item_id'=>'i2','qty'=>20,'price'=>142),array('item_id'=>'i3','qty'=>10,'price'=>96)),'terms'=>'Advance 50% required before dispatch.'),
  array('id'=>'inv4','number'=>'MJGRS/26-27/104','party_id'=>'p3','date'=>'2026-09-05','items'=>array(array('item_id'=>'i1','qty'=>100,'price'=>180)),'terms'=>'Freight charges extra as applicable.')
);

$priceHistory = array(
  'i1' => array(
    array('invoice'=>'MJGRS/26-27/12','date'=>'12-08-2026','qty'=>166,'mrp'=>0,'price'=>187.50,'disc1'=>0,'disc2'=>0,'party_id'=>'p1'),
    array('invoice'=>'MJGRS/26-27/11','date'=>'12-08-2026','qty'=>2000,'mrp'=>0,'price'=>187.50,'disc1'=>0,'disc2'=>0,'party_id'=>'p2'),
    array('invoice'=>'MJGRS/26-27/10','date'=>'12-08-2026','qty'=>2000,'mrp'=>0,'price'=>187.50,'disc1'=>0,'disc2'=>0,'party_id'=>'p1'),
  ),
  'i2' => array(
    array('invoice'=>'MJGRS/26-27/9','date'=>'28-07-2026','qty'=>500,'mrp'=>165,'price'=>142,'disc1'=>0,'disc2'=>0,'party_id'=>'p2'),
    array('invoice'=>'MJGRS/26-27/6','date'=>'15-07-2026','qty'=>300,'mrp'=>165,'price'=>140,'disc1'=>2,'disc2'=>0,'party_id'=>'p3'),
    array('invoice'=>'MJGRS/26-27/3','date'=>'02-07-2026','qty'=>750,'mrp'=>165,'price'=>141.50,'disc1'=>0,'disc2'=>0,'party_id'=>'p2'),
  ),
  'i3' => array(
    array('invoice'=>'MJGRS/26-27/8','date'=>'20-07-2026','qty'=>1200,'mrp'=>110,'price'=>97,'disc1'=>0,'disc2'=>0,'party_id'=>'p3'),
    array('invoice'=>'MJGRS/26-27/4','date'=>'30-06-2026','qty'=>1000,'mrp'=>110,'price'=>96,'disc1'=>0,'disc2'=>0,'party_id'=>'p1'),
  ),
);

$seed = array(
  'parties'=>$parties,'items'=>$items,'ledgers'=>$ledgers,'uoms'=>$uoms,
  'transporters'=>$transporters,'banks'=>$banks,'categories'=>$categories,'gstRates'=>$gstRates,
  'partyGroups'=>$partyGroups,'brokers'=>$brokers,'priceLists'=>$priceLists,'states'=>$states,'cessRates'=>$cessRates,
  'godowns'=>$godowns,'quotations'=>$quotations,'invoices'=>$invoices,'priceHistory'=>$priceHistory
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Credit Note | HisabKitab</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
:root{
  --primary:#4f158c;
  --primary-dark:#3d1070;
  --primary-light:#f4f0fa;
  --orange:#d65907;
  --orange2:#f76600;
  --bg:#f5f8fa;
  --text:#181c32;
  --muted:#73757d;
  --border:#e4e6ef;
  --green:#018a17;
  --green-dark:#016812;
  --red:#cc0000;
  --white:#fff;
  --radius:6px;
  --fs:11px;
}
*{box-sizing:border-box;margin:0;padding:0;}
html,body{height:100%;}
body{
  font-family:'Segoe UI',Roboto,Arial,sans-serif;
  font-size:var(--fs);
  background:var(--bg);
  color:var(--text);
  line-height:1.3;
  -webkit-font-smoothing:antialiased;
  overflow-x:hidden;
}
a{text-decoration:none;color:inherit;}
button{font-family:inherit;cursor:pointer;}
input,select,textarea{font-family:inherit;font-size:11px;color:var(--text);max-width:100%;}
ul{list-style:none;}

.app{display:flex;min-height:100vh;width:100%;}

.sidebar{
  width:220px;background:var(--primary);color:#fff;flex-shrink:0;
  position:fixed;top:0;left:0;bottom:0;overflow-y:auto;z-index:1000;
  transition:transform .25s ease, width .25s ease;scrollbar-width:thin;
}
.sidebar::-webkit-scrollbar{width:4px;}
.sidebar::-webkit-scrollbar-thumb{background:rgba(255,255,255,.25);border-radius:4px;}
.sidebar.collapsed{width:54px;}
.sidebar.collapsed .menu-text,.sidebar.collapsed .menu-arrow,
.sidebar.collapsed .section-label,.sidebar.collapsed .sidebar-brand-text{display:none;}
.sidebar-header{display:flex;align-items:center;justify-content:space-between;padding:10px 10px;border-bottom:1px solid rgba(255,255,255,.12);}
.sidebar-brand{display:flex;align-items:center;gap:6px;font-weight:700;font-size:13px;white-space:nowrap;}
.sidebar-brand i{background:#fff;color:var(--primary);width:22px;height:22px;border-radius:5px;display:flex;align-items:center;justify-content:center;font-size:11px;}
.sidebar-collapse-btn{background:rgba(255,255,255,.12);border:none;color:#fff;width:22px;height:22px;border-radius:4px;display:flex;align-items:center;justify-content:center;font-size:10px;flex-shrink:0;}
.sidebar-menu{padding:4px 4px 18px;}
.menu-item{position:relative;min-width:0;}
.menu-link{display:flex;align-items:flex-start;gap:7px;padding:6px 7px;border-radius:5px;font-size:11px;font-weight:500;color:rgba(255,255,255,.92);white-space:normal;word-break:break-word;min-width:0;}
.menu-link i.menu-icon{width:14px;text-align:center;font-size:12px;flex-shrink:0;margin-top:1px;}
.menu-link:hover,.menu-link.active{background:rgba(255,255,255,.14);color:#fff;}
.menu-link.active{background:rgba(255,255,255,.18);font-weight:700;}
.menu-text{flex:1;min-width:0;line-height:1.25;}
.menu-arrow{font-size:9px;transition:transform .2s ease;flex-shrink:0;margin-top:3px;}
.menu-item.open>.menu-link .menu-arrow{transform:rotate(90deg);}
.submenu{max-height:0;overflow:hidden;transition:max-height .3s ease;padding-left:8px;border-left:1px dashed rgba(255,255,255,.15);margin-left:14px;}
.menu-item.open>.submenu{max-height:3000px;}
.submenu .menu-link{font-size:10.5px;padding:5px 7px;gap:6px;}
.section-label{font-size:9px;letter-spacing:.5px;color:rgba(255,255,255,.55);text-transform:uppercase;padding:10px 8px 3px;font-weight:700;}
.badge-new{background:var(--orange2);color:#fff;font-size:8px;font-weight:700;padding:1px 4px;border-radius:7px;margin-left:3px;}

.overlay-bg{position:fixed;inset:0;background:rgba(24,28,50,.45);z-index:999;display:none;}
.overlay-bg.show{display:block;}

.main{margin-left:220px;flex:1;min-width:0;transition:margin-left .25s ease;width:calc(100% - 220px);}
.main.collapsed{margin-left:54px;width:calc(100% - 54px);}

.topbar{
  background:#fff;
  border-bottom:1px solid var(--border);
  display:flex;align-items:center;justify-content:space-between;
  padding:6px 12px;
  position:sticky;top:0;z-index:900;
  gap:8px;flex-wrap:wrap;
}
.topbar-left{display:flex;align-items:center;gap:10px;min-width:0;flex-wrap:wrap;}
.mobile-toggle{display:none;background:none;border:none;font-size:16px;color:var(--primary);flex-shrink:0;}
.page-title{font-size:14px;font-weight:700;color:var(--text);white-space:nowrap;}
.topbar-right{display:flex;align-items:center;gap:6px;flex-wrap:wrap;justify-content:flex-end;}
.topbar-right-secondary{display:flex;align-items:center;gap:6px;flex-wrap:wrap;}

.icon-btn{
  width:28px;height:28px;border-radius:5px;border:1px solid var(--border);
  background:#fff;display:flex;align-items:center;justify-content:center;
  color:var(--muted);font-size:12px;flex-shrink:0;
}
.icon-btn:hover{border-color:var(--primary);color:var(--primary);}

.select-box select{
  height:28px;border:1px solid var(--border);border-radius:5px;
  padding:0 6px;font-size:11px;background:#fff;color:var(--text);
  min-width:70px;max-width:100%;
}

.qbtn-group{display:flex;gap:5px;flex-wrap:wrap;}
.qbtn{
  background:var(--primary);color:#fff;border:none;border-radius:5px;
  padding:0 8px;height:28px;font-size:11px;font-weight:600;
  display:flex;align-items:center;gap:4px;white-space:nowrap;
}
.qbtn:hover{background:var(--primary-dark);}
.qbtn i{font-size:9px;}

.notif-wrap, .profile-wrap, .phone-wrap{position:relative;}
.notif-btn{position:relative;}
.notif-dot{
  position:absolute;top:3px;right:4px;width:6px;height:6px;background:var(--orange2);
  border-radius:50%;border:1.5px solid #fff;
}
.phone-btn{
  background:var(--primary);color:#fff;border:none;border-radius:5px;
  height:28px;padding:0 8px;display:flex;align-items:center;gap:5px;font-size:11px;font-weight:600;
  white-space:nowrap;
}
.avatar{
  width:28px;height:28px;border-radius:6px;background:var(--primary);
  display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:12px;
  cursor:pointer;border:2px solid var(--orange2);flex-shrink:0;
}

.dropdown-panel{
  position:absolute;top:32px;right:0;background:#fff;border:1px solid var(--border);
  border-radius:7px;box-shadow:0 6px 18px rgba(0,0,0,.12);min-width:200px;
  display:none;z-index:1200;overflow:hidden;
}
.dropdown-panel.show{display:block;}
.dropdown-panel a, .dropdown-panel .dd-item{
  display:flex;align-items:center;gap:7px;padding:7px 12px;font-size:11px;color:var(--text);
}
.dropdown-panel a:hover{background:var(--primary-light);color:var(--primary);}
.dropdown-header{padding:8px 12px;font-weight:700;font-size:11.5px;border-bottom:1px solid var(--border);display:flex;justify-content:space-between;align-items:center;}
.dropdown-header a{font-weight:500;font-size:10.5px;color:var(--primary);padding:0;}
.profile-panel{min-width:240px;}
.profile-panel .p-head{padding:11px;display:flex;gap:8px;align-items:center;border-bottom:1px solid var(--border);}
.profile-panel .p-head .avatar{border-radius:8px;}
.profile-panel .p-name{font-weight:700;font-size:12px;}
.profile-panel .p-email{font-size:10.5px;color:var(--muted);}
.profile-panel .p-plan{font-size:10.5px;color:var(--primary);font-weight:600;}
.profile-detail{padding:6px 12px;border-bottom:1px solid var(--border);}
.profile-detail .row{display:flex;justify-content:space-between;font-size:10.5px;padding:2px 0;color:var(--muted);}
.profile-detail .row span:last-child{color:var(--text);font-weight:600;}

.content{padding:10px 12px 76px;max-width:100%;overflow-x:hidden;}

.card{background:#fff;border-radius:var(--radius);box-shadow:0 0 8px rgba(0,0,0,.04);padding:8px 10px;min-width:0;margin-bottom:8px;}
.card h5{color:var(--primary);font-size:12px;font-weight:800;margin:8px 0 5px;}
.card h5:first-child{margin-top:0;}
.card h5.centered{text-align:center;}

.tab-tools{display:flex;justify-content:flex-end;align-items:center;gap:6px;margin-bottom:6px;flex-wrap:wrap;}
.ai-btn{background:linear-gradient(90deg,var(--primary),#6b2db0);color:#fff;border:none;border-radius:16px;padding:0 12px;height:28px;font-size:11px;font-weight:700;display:flex;align-items:center;gap:6px;}
.ai-btn .tag{background:var(--orange2);color:#fff;font-size:8.5px;font-weight:800;padding:1px 5px;border-radius:7px;}
.round-btn{width:28px;height:28px;border-radius:50%;border:1px solid var(--border);background:#fff;color:var(--primary);display:flex;align-items:center;justify-content:center;font-size:12px;}
.round-btn:disabled{opacity:.4;cursor:not-allowed;}
.round-btn.filled{background:var(--primary);color:#fff;border-color:var(--primary);}

.form-row{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:8px;}
.form-col{flex:1 1 200px;min-width:170px;}
.form-col.wide{flex:2 1 320px;}
.form-col.narrow{flex:0 1 120px;min-width:100px;}
.form-col.addr-col{flex: 0 0 calc(50% - 4px);max-width: calc(50% - 4px);min-width:100px;}

.field-label{display:block;font-size:10.5px;font-weight:700;color:var(--primary);margin-bottom:3px;}
.field-label .req{color:var(--red);}

.field-group{position:relative;border:1px solid var(--border);border-radius:5px;padding:6px 10px 5px;background:#fff;min-width:0;display:flex;align-items:center;min-height:32px;gap:4px;}
.field-group.focus{border-color:var(--primary);box-shadow:0 0 0 2px rgba(79,21,140,.08);}
.field-group>label{position:absolute;top:-6px;left:8px;background:#fff;padding:0 4px;font-size:9.5px;font-weight:600;color:var(--primary);white-space:nowrap;}
.field-group>label .req{color:var(--red);margin-left:2px;}
.field-group input,.field-group select,.field-group textarea{flex:1;min-width:0;border:none;outline:none;font-size:11.5px;color:var(--text);background:transparent;padding:0;height:19px;}
.field-group textarea{height:auto;min-height:38px;resize:vertical;padding-top:4px;}
.field-group select{cursor:pointer;appearance:none;-webkit-appearance:none;background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='6'><path d='M0 0l5 6 5-6z' fill='%2373757d'/></svg>");background-repeat:no-repeat;background-position:right 0 center;padding-right:14px;}
.field-group .prefix-text{font-weight:700;color:var(--text);font-size:11px;white-space:nowrap;}
.field-group .cc-select{flex:0 0 auto;width:48px;height:100%;border:none;border-right:1px solid var(--border);background:transparent;font-size:10.5px;padding-right:4px;margin-right:2px;}
.field-group .suffix-select{flex:0 0 auto;width:56px;height:100%;border:none;border-left:1px solid var(--border);background:transparent;font-size:10.5px;padding-left:4px;margin-left:2px;text-align:center;}
.field-group.readonly input{color:var(--primary);font-weight:700;}
.field-group.with-icon{padding-right:34px;}
.field-group .field-icon-btn{position:absolute;right:1px;top:1px;bottom:1px;width:28px;border:none;background:var(--primary);color:#fff;border-radius:0 4px 4px 0;display:flex;align-items:center;justify-content:center;font-size:11px;}
.field-group.two-icons{padding-right:64px;}
.field-group.two-icons .field-icon-btn.second{right:29px;border-radius:0;background:var(--bg);color:var(--primary);}
.field-group .field-char-count{position:absolute;right:8px;bottom:-14px;font-size:9px;color:var(--muted);}
.field-group-full{width:100%;}
.credit-invoice-reference{background:var(--primary-light);}
#creditInvoiceReferenceRow{margin-top:-2px;}
#creditInvoiceReferenceRow.show{display:flex!important;}
#creditInvoiceReferenceRow .field-group.readonly input{color:var(--primary);font-weight:700;}

.check-row{display:flex;align-items:center;gap:6px;margin-top:6px;font-size:10.5px;font-weight:600;}
.checkbox-row{display:flex;align-items:center;gap:6px;font-size:11px;color:var(--text);margin-bottom:6px;}
.checkbox-row input{width:14px;height:14px;accent-color:var(--primary);cursor:pointer;}
.radio-row{display:flex;gap:12px;align-items:center;margin-top:5px;flex-wrap:wrap;}
.radio-row label{display:flex;align-items:center;gap:5px;font-weight:600;font-size:11px;}

.address-select-box{background:var(--bg);border-radius:var(--radius);padding:8px;border:1px solid var(--border);height:100%;}
.addr-box-head{display:flex;justify-content:space-between;align-items:center;gap:8px;flex-wrap:wrap;margin-bottom:6px;}
.addr-box-head strong{color:var(--primary);font-size:11px;}
.addr-box-actions{display:flex;align-items:center;gap:8px;flex-wrap:wrap;}
.same-as-billing{display:flex;align-items:center;gap:4px;font-size:10.5px;font-weight:700;color:var(--primary);cursor:pointer;user-select:none;}
.same-as-billing input{accent-color:var(--primary);width:12px;height:12px;margin:0;}
.addr-add-btn{background:#fff;color:var(--primary);border:1px dashed var(--primary);border-radius:5px;padding:3px 8px;font-weight:700;font-size:10.5px;display:flex;align-items:center;gap:4px;}
.addr-choose-btn{background:#fff;color:var(--primary);border:1px solid var(--primary);border-radius:5px;padding:3px 8px;font-weight:700;font-size:10.5px;display:flex;align-items:center;gap:4px;}
.addr-list{display:flex;flex-direction:column;gap:5px;max-height:280px;overflow-y:auto;padding-right:2px;}
.addr-selected{display:flex;flex-direction:column;gap:5px;}
.addr-empty{font-size:10.5px;color:var(--muted);padding:6px 2px;}
.addr-row{display:flex;align-items:flex-start;gap:7px;padding:6px 7px;background:#fff;border:1px solid var(--border);border-radius:5px;cursor:pointer;transition:border-color .15s;}
.addr-row:hover{border-color:var(--primary);}
.addr-row.selected{border-color:var(--primary);background:var(--primary-light);}
.addr-row input{margin-top:2px;accent-color:var(--primary);width:13px;height:13px;flex-shrink:0;}
.addr-content{flex:1;min-width:0;}
.addr-title{font-weight:700;font-size:10.5px;color:var(--primary);display:flex;gap:6px;flex-wrap:wrap;align-items:center;}
.addr-gstin{font-size:9px;font-weight:700;background:var(--orange2);color:#fff;padding:1px 5px;border-radius:6px;}
.addr-text{font-size:10px;color:var(--text);margin-top:2px;line-height:1.3;overflow-wrap:anywhere;}
.addr-actions{display:flex;flex-direction:column;gap:3px;align-items:center;}
.addr-actions button{background:none;border:none;color:var(--muted);font-size:10px;padding:2px 4px;line-height:1;}
.addr-actions button:hover{color:var(--primary);}
.addr-summary{font-size:10px;color:var(--muted);margin-top:5px;font-weight:600;}

.item-table-wrap{position:relative;overflow-x:auto;-webkit-overflow-scrolling:touch;}
.item-table-card{padding-bottom:6px;}
table.item-table{width:100%;border-collapse:separate;border-spacing:0;table-layout:fixed;min-width:1420px;background:#fff;}
table.item-table thead th{background:var(--primary);color:#fff;font-size:10px;font-weight:700;padding:6px 4px;text-align:center;white-space:nowrap;border-right:1px solid rgba(255,255,255,.12);overflow:hidden;}
table.item-table thead th:last-child{border-right:none;}
table.item-table tbody td{border-bottom:1px solid var(--border);border-right:1px solid var(--border);padding:3px 4px;vertical-align:middle;background:#fff;overflow:hidden;}
table.item-table tbody td:last-child{border-right:none;}
table.item-table tbody tr:nth-child(even) td{background:#fafbfd;}
table.item-table input,table.item-table select{height:28px;border:1px solid var(--border);border-radius:4px;padding:0 4px;width:100%;font-size:10.5px;}
table.item-table td.num input{text-align:right;}
.col-sr{width:38px;text-align:center;}
.col-item{width:210px;}
.col-itemgroup{width:120px;}
.col-hsn{width:88px;}
.col-godown{width:100px;}
.col-uom{width:88px;}
.col-qty{width:68px;}
.col-price{width:92px;}
.col-gst{width:62px;}
.col-discount1,.col-discount2{width:118px;}
.col-totaldiscount{width:82px;}
.col-sku{width:85px;}
.col-mrp{width:72px;}
.col-taxable{width:92px;}
.col-tax{width:80px;}
.col-cess{width:72px;}
.col-total{width:96px;}
.col-action{width:38px;text-align:center;}
.item-name-desc{margin-top:3px;}
.item-name-desc input{height:24px;font-size:10px;}
table.item-table td.readonly-cell{font-weight:700;text-align:right;white-space:nowrap;font-size:10.5px;padding:3px 6px;overflow:hidden;text-overflow:ellipsis;}
table.item-table tfoot td{background:var(--bg);font-weight:800;padding:6px 4px;font-size:11px;border-top:2px solid var(--primary);overflow:hidden;}
.discount-cell{display:flex;gap:3px;align-items:center;width:100%;}
.discount-cell > select{width:40px !important;flex-shrink:0;height:28px;padding:0 1px !important;}
.discount-cell > input{flex:1 1 auto !important;width:auto !important;min-width:0;height:28px;}
input[type="number"].row-disc1-val::-webkit-inner-spin-button,
input[type="number"].row-disc1-val::-webkit-outer-spin-button,
input[type="number"].row-disc2-val::-webkit-inner-spin-button,
input[type="number"].row-disc2-val::-webkit-outer-spin-button{opacity:1;}
.row-delete{background:none;border:none;color:var(--red);font-size:13px;width:28px;height:28px;display:flex;align-items:center;justify-content:center;}
.add-line-btn{background:var(--green);color:var(--white);border:1px dashed var(--primary);border-radius:5px;padding:4px 9px;font-weight:700;font-size:10.5px;}

#itemTable.cfg-hide-discount1 .col-discount1,
#itemTable.cfg-hide-discount2 .col-discount2,
#itemTable.cfg-hide-totaldiscount .col-totaldiscount,
#itemTable.cfg-hide-mrp .col-mrp,
#itemTable.cfg-hide-godown .col-godown,
#itemTable.cfg-hide-itemgroup .col-itemgroup{display:none;}
#itemTable.cfg-hide-itemdesc .item-name-desc{display:none;}
#itemTable.cfg-hide-pricelist .js-price-history{display:none;}
#itemTable.mode-accounting .col-uom,
#itemTable.mode-accounting .col-gst,
#itemTable.mode-accounting .col-hsn,
#itemTable.mode-accounting .col-mrp{display:none;}

.item-search-wrap{position:relative;}
.item-search-wrap .js-item-search{padding-right:26px;}
#itemTable:not(.cfg-hide-pricelist) .item-search-wrap .js-item-search{padding-right:52px;}
.item-search-icon-btn{position:absolute;top:1px;bottom:1px;width:26px;border:none;display:flex;align-items:center;justify-content:center;font-size:11px;}
.js-price-history{right:26px;background:var(--bg);color:var(--primary);border-left:1px solid var(--border);}
.js-add-item{right:0;background:var(--primary);color:#fff;border-radius:0 4px 4px 0;}

.two-col{display:flex;gap:12px;flex-wrap:wrap;}
.two-col>div{flex:1 1 320px;min-width:280px;}

.charges-scroll-wrap{overflow-x:auto;-webkit-overflow-scrolling:touch;padding-bottom:4px;}
.charge-row{display:flex;gap:6px;align-items:center;margin-bottom:6px;flex-wrap:nowrap;min-width:700px;}
.charge-row select,.charge-row input{height:28px;border:1px solid var(--border);border-radius:5px;padding:0 6px;}
.charge-ledger{flex:2 1 170px;min-width:150px;}
.charge-disc-type{width:48px;flex-shrink:0;}
.charge-disc-val{flex:1 1 80px;min-width:70px;}
.charge-amount{flex:1 1 90px;min-width:80px;text-align:right;}
.charge-gst{flex:1 1 80px;min-width:70px;}
.charge-total{width:70px;flex-shrink:0;text-align:right;font-weight:700;}
.addless-sign{flex:0 0 70px;}
.addless-amount{flex:1 1 90px;min-width:80px;}
.icon-add-inline{background:var(--primary);color:#fff;border:none;border-radius:5px;width:26px;height:28px;flex-shrink:0;}
.icon-remove-inline{background:none;border:none;color:var(--red);width:22px;flex-shrink:0;}
.add-charge-btn{background:none;border:1px dashed var(--primary);color:var(--primary);border-radius:5px;padding:4px 9px;font-weight:700;font-size:10.5px;}
.gstr1-check{display:flex;align-items:center;gap:4px;font-size:10px;font-weight:600;white-space:nowrap;flex-shrink:0;}

.opening-stock-wrap{display:flex;flex-direction:column;gap:8px;margin-bottom:6px;}
.os-row{display:grid;grid-template-columns:repeat(4,1fr) 30px;gap:8px;align-items:end;background:var(--bg);border:1px solid var(--border);border-radius:6px;padding:8px;}
.os-field{display:flex;flex-direction:column;gap:3px;min-width:0;}
.os-label{font-size:9px;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:.3px;}
.os-field input{height:30px;border:1px solid var(--border);border-radius:5px;padding:0 8px;width:100%;min-width:0;background:#fff;}
.os-field input.os-taxable{background:#fff;font-weight:700;color:var(--primary);}
.os-row .os-remove{align-self:end;height:30px;width:30px;flex-shrink:0;display:flex;align-items:center;justify-content:center;}
.os-summary-row{display:grid;grid-template-columns:repeat(4,1fr);gap:8px;background:var(--primary-light);border:1px dashed var(--primary);border-radius:6px;padding:8px;margin-top:2px;}
.os-summary-row .os-field input{background:#fff;font-weight:800;color:var(--primary);}
@media(max-width:640px){
  .os-row{grid-template-columns:1fr 1fr;position:relative;padding:30px 8px 8px;}
  .os-row .os-remove{position:absolute;top:4px;right:4px;height:22px;width:22px;background:var(--red);color:#fff;border-radius:50%;font-size:9px;}
  .os-summary-row{grid-template-columns:1fr 1fr;}
}

.item-type-toggle{display:inline-flex;border:1px solid var(--border);border-radius:20px;overflow:hidden;width:fit-content;}
.itt-btn{background:#fff;color:var(--text);border:none;padding:6px 16px;font-size:10.5px;font-weight:700;}
.itt-btn.active{background:var(--primary);color:#fff;}

.summary-list{margin-top:4px;}
.summary-row{display:flex;justify-content:space-between;align-items:center;padding:3px 0;font-weight:700;font-size:11px;gap:6px;flex-wrap:wrap;}
.summary-row.grand{font-size:13px;color:var(--primary);border-top:2px dashed var(--border);margin-top:5px;padding-top:7px;}
.summary-row input{width:84px;height:24px;text-align:right;border:1px solid var(--border);border-radius:5px;font-size:11px;}
.summary-dual{display:flex;gap:5px;align-items:center;}
.summary-dual input.pct-input{width:48px;}
.summary-dual input.amt-input{width:74px;background:var(--bg);}

.upload-box{border:1px dashed var(--border);border-radius:var(--radius);padding:8px;background:var(--primary-light);}
.upload-box input[type=file]{width:100%;font-size:10px;}
.upload-list{display:flex;flex-wrap:wrap;gap:6px;margin-top:6px;}
.upload-chip{display:flex;align-items:center;gap:5px;background:#fff;border:1px solid var(--border);border-radius:5px;padding:3px 6px;font-size:10.5px;max-width:100%;}
.upload-chip span{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;max-width:140px;}
.upload-chip button{background:none;border:none;color:var(--red);}

.fixed-bottom{position:fixed;left:220px;right:0;bottom:0;background:#fff;box-shadow:0 -3px 12px rgba(0,0,0,.08);padding:6px 12px;display:flex;gap:6px;flex-wrap:nowrap;z-index:800;transition:left .25s ease;overflow-x:auto;-webkit-overflow-scrolling:touch;}
.fixed-bottom.collapsed{left:54px;}
.btn{border:none;border-radius:6px;padding:0 15px;height:30px;font-weight:700;font-size:11.5px;display:inline-flex;align-items:center;justify-content:center;white-space:nowrap;}
.btn-primary{background:var(--primary);color:#fff;}
.btn-primary:hover{background:var(--primary-dark);}
.btn-outline{background:#e4e6ef;color:var(--text);font-weight:600;}
.btn-outline:hover{background:#d4d6e3;}
.btn-orange{background:var(--orange2);color:#fff;}
.btn-orange:hover{background:var(--orange);}
.fixed-bottom .btn{height:28px;padding:0 12px;font-size:10.5px;flex:1 1 0;min-width:0;}

.modal-overlay{position:fixed;inset:0;background:rgba(0,0,0,.45);display:none;align-items:center;justify-content:center;z-index:4000;padding:20px;}
.modal-overlay.show{display:flex;}
#addPartyGroupModal,#addBrokerModal,#addLedgerModal,#addTransporterModal,#addUomModal,#addCategoryModal,#addCessRateModal,#addBankModal{z-index:4010;}
.modal-box{background:#fff;border-radius:8px;box-shadow:0 12px 40px rgba(0,0,0,.18);width:100%;max-width:400px;max-height:88vh;overflow:hidden;position:relative;display:flex;flex-direction:column;}
.modal-box.wide{max-width:640px;}
.modal-box.x-wide{max-width:780px;}
.modal-head{display:flex;justify-content:space-between;align-items:center;padding:11px 16px;border-bottom:1px solid var(--border);flex-shrink:0;gap:8px;}
.modal-head h4{font-size:13.5px;font-weight:700;color:var(--primary);white-space:nowrap;}
.modal-head-actions{display:flex;align-items:center;gap:6px;flex-wrap:wrap;justify-content:flex-end;}
.modal-gear-btn{background:none;border:none;font-size:14px;color:var(--muted);}
.modal-gear-btn:hover{color:var(--primary);}
.modal-close{background:transparent;border:none;color:var(--muted);font-size:15px;cursor:pointer;width:24px;height:24px;border-radius:5px;display:inline-flex;align-items:center;justify-content:center;flex-shrink:0;}
.modal-close:hover{background:var(--bg);color:var(--text);}
.btn-fetch-gstin-header{background:var(--green);color:#fff;border:none;border-radius:5px;padding:0 10px;height:26px;font-size:10px;font-weight:700;white-space:nowrap;display:flex;align-items:center;gap:5px;flex-shrink:0;}
.btn-fetch-gstin-header:hover{background:var(--green-dark);}
.modal-body{padding:14px 16px;overflow-y:auto;}
.modal-foot{display:flex;align-items:center;justify-content:flex-end;gap:8px;padding:11px 16px;border-top:1px solid var(--bg);background:#fafbfc;flex-shrink:0;flex-wrap:wrap;}

.modal-section-head{color:var(--primary);font-size:12px;font-weight:800;text-align:center;margin:14px 0 6px;padding-top:10px;border-top:1px dashed var(--border);}
.modal-section-head:first-child{border-top:none;margin-top:0;padding-top:0;}
.modal-subhead{color:var(--primary);font-size:11.5px;font-weight:800;margin:10px 0 6px;display:flex;align-items:center;justify-content:space-between;cursor:pointer;}
.modal-subhead .fa-chevron-up{transition:transform .2s ease;}
.modal-subhead.collapsed .fa-chevron-up{transform:rotate(180deg);}
.collapsible-body{display:block;}
.collapsible-body.collapsed{display:none;}

.switch-row{display:flex;justify-content:space-between;align-items:center;margin:6px 0;gap:8px;}
.toggle{position:relative;width:34px;height:19px;flex-shrink:0;}
.toggle input{opacity:0;width:0;height:0;}
.toggle span{position:absolute;inset:0;background:#ccc;border-radius:20px;transition:.2s;}
.toggle span:before{content:"";position:absolute;width:13px;height:13px;left:3px;top:3px;background:#fff;border-radius:50%;transition:.2s;}
.toggle input:checked+span{background:var(--primary);}
.toggle input:checked+span:before{transform:translateX(15px);}

.img-upload-row{display:flex;gap:8px;flex-wrap:wrap;align-items:flex-start;}
.img-upload-main{width:76px;height:76px;border:1px dashed var(--border);border-radius:6px;background:var(--primary-light);display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;flex-shrink:0;cursor:pointer;color:var(--primary);}
.img-upload-main img{width:100%;height:100%;object-fit:cover;}
.img-upload-hint{font-size:9px;color:var(--muted);max-width:120px;}
.additional-images-row{display:flex;gap:6px;flex-wrap:wrap;margin-top:6px;}
.add-img-tile{width:56px;height:56px;border:1px dashed var(--border);border-radius:6px;background:#fff;color:var(--primary);display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0;position:relative;overflow:hidden;cursor:pointer;}
.add-img-tile img{width:100%;height:100%;object-fit:cover;}
.img-remove-btn{position:absolute;top:1px;right:1px;width:14px;height:14px;background:var(--red);color:#fff;border:none;border-radius:50%;font-size:8px;line-height:1;}

.hsn-search-link{display:flex;align-items:center;justify-content:flex-end;gap:5px;color:var(--primary);font-size:10px;font-weight:700;cursor:pointer;margin-bottom:4px;}

.global-search-results{
  position:fixed;background:#fff;border:1px solid var(--primary);
  border-radius:6px;box-shadow:0 10px 24px rgba(0,0,0,.18);max-height:280px;overflow-y:auto;
  display:none;z-index:5000;
}
.global-search-results.show{display:block;}
.global-search-results .isr{
  padding:7px 10px;font-size:11px;cursor:pointer;border-bottom:1px solid var(--border);
  display:flex;justify-content:space-between;align-items:center;gap:6px;
}
.global-search-results .isr:last-child{border-bottom:none;}
.global-search-results .isr:hover,.global-search-results .isr.active{background:var(--primary-light);color:var(--primary);}
.global-search-results .isr .name{font-weight:600;}
.global-search-results .isr .meta{color:var(--muted);font-size:10px;white-space:nowrap;display:flex;align-items:center;gap:6px;}
.global-search-results .isr .stock-pos{color:var(--green);font-weight:700;}
.global-search-results .isr .stock-neg{color:var(--red);font-weight:700;}
.global-search-results .isr-empty{padding:7px 10px;font-size:10.5px;color:var(--muted);text-align:center;}

.party-search-wrap{position:relative;}
.party-search-results{
  position:fixed;background:#fff;border:1px solid var(--primary);
  border-radius:6px;box-shadow:0 10px 24px rgba(0,0,0,.18);max-height:280px;overflow-y:auto;
  display:none;z-index:5000;
}
.party-search-results.show{display:block;}
.psr{padding:8px 10px;cursor:pointer;border-bottom:1px solid var(--border);}
.psr:last-child{border-bottom:none;}
.psr-line1{font-weight:700;font-size:11px;color:var(--text);}
.psr-line2{font-size:10px;font-weight:700;color:var(--primary);margin-top:2px;}
.psr-state{color:var(--muted);font-weight:600;}
.psr:hover{background:var(--primary-light);}
.psr.active{background:var(--primary);}
.psr.active .psr-line1{color:#fff;}
.psr.active .psr-line2{color:#fff;}
.psr.active .psr-state{color:rgba(255,255,255,.85);}
.psr-empty{padding:7px 10px;font-size:10.5px;color:var(--muted);text-align:center;}

.item-price-mode{display:flex;align-items:center;gap:5px;background:#fff;border:1px solid var(--border);border-radius:5px;padding:2px 6px;height:28px;}
.item-price-mode .ipm-label{font-size:10.5px;font-weight:700;color:var(--primary);white-space:nowrap;}
.item-price-mode .ipm-select{height:22px;border:1px solid var(--border);border-radius:4px;padding:0 6px;font-size:11px;font-weight:600;background:#fff;cursor:pointer;}

.compliance-row{display:flex;gap:14px;flex-wrap:wrap;margin-top:5px;}
.compliance-row label.check-row{margin-top:0;background:var(--bg);padding:5px 9px;border-radius:5px;border:1px solid var(--border);cursor:pointer;}
.compliance-row label.check-row:has(input:checked){background:var(--primary-light);border-color:var(--primary);color:var(--primary);}
.part-b-section{margin-top:8px;padding:8px 10px;background:#f4f0fa;border:1px dashed var(--primary);border-radius:var(--radius);display:none;}
.part-b-section.show{display:block;}
.part-b-section .part-b-head{color:var(--primary);font-size:11px;font-weight:800;text-align:center;margin-bottom:6px;padding-bottom:5px;border-bottom:1px dashed rgba(79,21,140,.25);letter-spacing:.5px;}

.toast-stack{position:fixed;top:14px;right:14px;z-index:6000;display:flex;flex-direction:column;gap:8px;max-width:calc(100% - 28px);}
.toast{background:#242c32;color:#fff;padding:9px 14px;border-radius:7px;font-size:11px;font-weight:600;box-shadow:0 6px 16px rgba(0,0,0,.25);display:flex;align-items:center;gap:8px;min-width:200px;max-width:100%;}
.toast i{color:var(--orange2);}
#footTaxable,
#footTax,
#footCess,
#footTotal {
    text-align: right;
}

.godown-stock-modal .modal-body{padding:8px 10px;}
.gsl-table-wrap{overflow-x:auto;}
table.gsl-table{width:100%;border-collapse:collapse;min-width:520px;}
table.gsl-table th{background:var(--primary);color:#fff;font-size:10px;padding:6px;text-align:center;white-space:nowrap;}
table.gsl-table td{padding:5px 6px;border-bottom:1px solid var(--border);font-size:10.5px;text-align:center;}
table.gsl-table tr:hover td{background:var(--primary-light);}
table.gsl-table .gsl-qty-input{width:78px;height:26px;}
table.gsl-table .gsl-pick-btn{background:var(--primary);color:#fff;border:none;border-radius:4px;padding:3px 9px;font-size:10px;font-weight:700;}
.gsl-stock-pos{color:var(--green);font-weight:700;}
.gsl-stock-neg{color:var(--red);font-weight:700;}
.gsl-item-name{font-weight:700;color:var(--primary);font-size:11.5px;margin-bottom:8px;text-align:center;}

.price-history-modal .modal-head{padding:9px 16px;}
.ph-alltoggle{display:flex;align-items:center;gap:8px;font-size:11px;font-weight:700;color:var(--text);}
.ph-title{background:var(--primary);color:#fff;text-align:center;font-weight:800;font-size:12px;padding:7px;border-radius:5px;margin-bottom:8px;}
.ph-table-wrap{overflow:auto;max-height:320px;border:1px solid var(--border);border-radius:5px;}
table.ph-table{width:100%;border-collapse:collapse;min-width:780px;}
table.ph-table th{background:var(--primary);color:#fff;font-size:10px;font-weight:700;padding:7px 6px;text-align:center;white-space:nowrap;position:sticky;top:0;z-index:2;}
table.ph-table th select{margin-top:4px;height:22px;border:none;border-radius:4px;padding:0 4px;font-size:9.5px;color:var(--text);width:auto;}
table.ph-table td{padding:6px;border-bottom:1px solid var(--border);font-size:10.5px;text-align:center;white-space:nowrap;background:#fff;}
table.ph-table tbody tr:hover td{background:var(--primary-light);}
.ph-pick-link{color:var(--primary);font-weight:700;text-decoration:underline;cursor:pointer;background:none;border:none;font-size:10.5px;}
.ph-empty-row td{color:var(--muted);padding:16px;font-size:11px;}

@media(max-width:1200px){.form-row{gap:7px;}}
@media(max-width:900px){.two-col>div{flex:1 1 100%;}.form-col.addr-col{max-width:100%;flex:1 1 100%;}}
@media(max-width:768px){
  .sidebar{transform:translateX(-100%);width:210px;}
  .sidebar.mobile-open{transform:translateX(0);}
  .main{margin-left:0 !important;width:100% !important;}
  .mobile-toggle{display:flex;}
  .qbtn-group{order:5;width:100%;overflow-x:auto;flex-wrap:nowrap;}
  .content{padding:8px 8px 92px;}
  .fixed-bottom{left:0!important;padding:14px 16px;display:grid;grid-template-columns:1fr 1fr;gap:10px}.fixed-bottom .btn{padding:0 15px;font-size:13px}
  .icon-remove-inline{align-self:center;}
  .topbar{padding:6px 8px;}
  .topbar-left{gap:6px;}
  .topbar-right{width:100%;justify-content:space-between;}
  .topbar-right-secondary{margin-left:auto;}
  .item-table-wrap{overflow-x:auto;}
  .modal-box{max-width:96vw;}
  .modal-head{padding:9px 12px;}
  .modal-body{padding:10px 12px;}
}
@media(max-width:480px){
  .select-box select{min-width:50px;}
  .topbar{padding:6px 8px;}
  .page-title{font-size:13px;}
  .card{padding:7px 8px;}
  .modal-box{max-height:82vh;}
}
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

:root{--primary:#473c97;--primary-dark:#3a3080;--primary-light:#f1effb;--bg:#f7f7fc;--text:#1f1d3d;--muted:#6c6f8a;--border:#e9e8f4;}
.sidebar,.topbar,.hk-hero,.ctrl-drawer,.ctrl-overlay{font-family:'Poppins','Segoe UI',Roboto,Arial,sans-serif;font-size:13px;line-height:1.4;}
.sidebar{width:250px;background:var(--primary);color:#fff;flex-shrink:0;position:fixed;top:0;left:0;bottom:0;overflow-y:auto;z-index:1000;transition:transform .25s ease, width .25s ease;scrollbar-width:thin;}
.sidebar::-webkit-scrollbar{width:5px;}
.sidebar::-webkit-scrollbar-thumb{background:rgba(255,255,255,.25);border-radius:5px;}
.sidebar.collapsed{width:64px;}
.sidebar.collapsed .menu-text,
.sidebar.collapsed .menu-arrow,
.sidebar.collapsed .section-label,
.sidebar.collapsed .sidebar-brand-text{display:none;}
.sidebar-header{display:flex;align-items:center;justify-content:space-between;padding:14px 12px;border-bottom:1px solid rgba(255,255,255,.12);}
.sidebar-brand{display:flex;align-items:center;gap:8px;font-weight:700;font-size:14px;white-space:nowrap;}
.sidebar-brand i{background:#fff;color:var(--primary);width:26px;height:26px;border-radius:6px;display:flex;align-items:center;justify-content:center;font-size:13px;}
.sidebar-collapse-btn{background:rgba(255,255,255,.12);border:none;color:#fff;width:24px;height:24px;border-radius:5px;display:flex;align-items:center;justify-content:center;font-size:11px;flex-shrink:0;}
.sidebar-menu{padding:6px 6px 20px;}
.menu-item{position:relative;min-width:0;}
.menu-link{display:flex;align-items:flex-start;gap:9px;padding:8px 8px;border-radius:6px;font-size:12px;font-weight:500;color:rgba(255,255,255,.92);white-space:normal;word-break:break-word;min-width:0;}
.menu-link i.menu-icon{width:16px;text-align:center;font-size:13px;flex-shrink:0;margin-top:1px;}
.menu-link:hover, .menu-link.active{background:rgba(255,255,255,.14);color:#fff;}
.menu-link.active{background:rgba(255,255,255,.18);font-weight:700;}
.menu-text{flex:1;min-width:0;line-height:1.3;}
.menu-arrow{font-size:10px;transition:transform .2s ease;flex-shrink:0;margin-top:3px;}
.menu-item.open > .menu-link .menu-arrow{transform:rotate(90deg);}
.submenu{max-height:0;overflow:hidden;transition:max-height .3s ease;padding-left:10px;border-left:1px dashed rgba(255,255,255,.15);margin-left:16px;}
.menu-item.open > .submenu{max-height:3000px;}
.submenu .menu-link{font-size:11.5px;padding:6px 8px;gap:7px;}
.submenu .menu-link i:not(.menu-arrow){font-size:6px;margin-top:5px;}
.submenu .submenu .menu-link{font-size:11px;}
.section-label{font-size:10px;letter-spacing:.5px;color:rgba(255,255,255,.55);text-transform:uppercase;padding:12px 10px 4px;font-weight:700;}
.badge-new{background:var(--orange2);color:#fff;font-size:8.5px;font-weight:700;padding:1px 5px;border-radius:8px;margin-left:4px;}

.main{margin-left:250px;flex:1;min-width:0;transition:margin-left .25s ease;}
.main.collapsed{margin-left:64px;}

.topbar{background:#fff;border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;padding:8px 16px;position:sticky;top:0;z-index:900;gap:10px;flex-wrap:nowrap;}
.topbar-left{display:flex;align-items:center;gap:12px;min-width:0;flex-wrap:wrap;}
.mobile-toggle{display:none;background:none;border:none;font-size:18px;color:var(--primary);flex-shrink:0;}
.page-title{font-size:16px;font-weight:700;color:var(--text);white-space:nowrap;}
.topbar-right{display:flex;align-items:center;gap:8px;flex-wrap:wrap;justify-content:flex-end;}
.topbar-right-secondary{display:flex;align-items:center;gap:8px;flex-wrap:wrap;}
.icon-btn{width:32px;height:32px;border-radius:6px;border:1px solid var(--border);background:#fff;display:flex;align-items:center;justify-content:center;color:var(--muted);font-size:13px;flex-shrink:0;}
.icon-btn:hover{border-color:var(--primary);color:var(--primary);}
.select-box select{height:32px;border:1px solid var(--border);border-radius:6px;padding:0 8px;font-size:12px;background:#fff;color:var(--text);min-width:80px;max-width:100%;}
.qbtn-group{display:flex;gap:6px;flex-wrap:wrap;}
.qbtn{background:var(--primary);color:#fff;border:none;border-radius:6px;padding:0 10px;height:32px;font-size:12px;font-weight:600;display:flex;align-items:center;gap:5px;white-space:nowrap;}
.qbtn:hover{background:var(--primary-dark);}
.qbtn i{font-size:10px;}
.notif-wrap, .profile-wrap, .phone-wrap{position:relative;}
.notif-btn{position:relative;}
.notif-dot{position:absolute;top:4px;right:5px;width:7px;height:7px;background:var(--orange2);border-radius:50%;border:1.5px solid #fff;}
.phone-btn{background:var(--primary);color:#fff;border:none;border-radius:6px;height:32px;padding:0 10px;display:flex;align-items:center;gap:6px;font-size:12px;font-weight:600;white-space:nowrap;}
.avatar{width:32px;height:32px;border-radius:8px;background:var(--primary);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:13px;cursor:pointer;border:2px solid var(--orange2);flex-shrink:0;}
.dropdown-panel{position:absolute;top:38px;right:0;background:#fff;border:1px solid var(--border);border-radius:8px;box-shadow:0 8px 24px rgba(0,0,0,.12);min-width:220px;display:none;z-index:1200;overflow:hidden;}
.dropdown-panel.show{display:block;}
.dropdown-panel a, .dropdown-panel .dd-item{display:flex;align-items:center;gap:8px;padding:9px 14px;font-size:12px;color:var(--text);}
.dropdown-panel a:hover{background:var(--primary-light);color:var(--primary);}
.dropdown-header{padding:10px 14px;font-weight:700;font-size:12.5px;border-bottom:1px solid var(--border);display:flex;justify-content:space-between;align-items:center;}
.dropdown-header a{font-weight:500;font-size:11px;color:var(--primary);padding:0;}
.profile-panel{min-width:260px;}
.profile-panel .p-head{padding:14px;display:flex;gap:10px;align-items:center;border-bottom:1px solid var(--border);}
.profile-panel .p-head .avatar{border-radius:10px;}
.profile-panel .p-name{font-weight:700;font-size:13px;}
.profile-panel .p-email{font-size:11px;color:var(--muted);}
.profile-panel .p-plan{font-size:11px;color:var(--primary);font-weight:600;}
.profile-detail{padding:8px 14px;border-bottom:1px solid var(--border);}
.profile-detail .row{display:flex;justify-content:space-between;font-size:11px;padding:3px 0;color:var(--muted);}
.profile-detail .row span:last-child{color:var(--text);font-weight:600;}
.overlay-bg{position:fixed;inset:0;background:rgba(0,0,0,.4);z-index:990;display:none;}
.overlay-bg.show{display:block;}
@media(max-width:768px){
  .sidebar{transform:translateX(-100%);width:230px;}
  .sidebar.mobile-open{transform:translateX(0);}
  .main{margin-left:0 !important;}
  .mobile-toggle{display:flex;}
  .topbar{padding:8px 10px;}
  .page-title{font-size:14px;}
  .select-box select{min-width:60px;}
  .topbar-left{gap:8px;}
}
@media(max-width:480px){
  .dropdown-panel{right:-10px;min-width:200px;}
}
.sidebar{width:270px;background:#fff;color:var(--text);border-right:1px solid var(--border);}
.sidebar.collapsed{width:72px;}
.sidebar::-webkit-scrollbar-thumb{background:#d9d6ee;}
.sidebar-header{padding:20px 18px;border-bottom:1px solid var(--border);}
.sidebar-brand{font-size:20px;font-weight:700;color:var(--primary);gap:12px;}
.sidebar-brand i{width:40px;height:40px;border-radius:12px;font-size:18px;background:linear-gradient(135deg,#f76600,#ffa24d);color:#fff;}
.sidebar-collapse-btn{width:34px;height:34px;border-radius:10px;background:var(--primary-light);color:var(--primary);font-size:12px;}
.sidebar-menu{padding:12px 14px 24px;}
.menu-link{padding:12px 14px;border-radius:12px;font-size:14px;font-weight:500;color:#3d3b5e;gap:14px;align-items:center;}
.menu-link i.menu-icon{width:20px;font-size:16px;color:#8a87ad;margin-top:0;}
.menu-link:hover{background:var(--primary-light);color:var(--primary);}
.menu-link.active{background:var(--primary-light);color:var(--primary);font-weight:600;}
.menu-link:hover i.menu-icon,.menu-link.active i.menu-icon{color:var(--primary);}
.menu-arrow{font-size:11px;color:#9a98b8;margin-top:0;}
.submenu{border-left:1px dashed #d9d6ee;}
.submenu .menu-link{font-size:13px;padding:9px 12px;}
.section-label{color:#9a98b8;}
.badge-new{background:#fde7d5;color:#d65907;font-size:11px;padding:2px 9px;border-radius:10px;}

.main{margin-left:270px;}
.main.collapsed{margin-left:72px;}
.topbar{background:#fff;border-bottom:1px solid var(--border);padding:16px 24px;}
.page-title{font-size:22px;font-weight:700;color:var(--text);}
.select-box select,.company-select select,.fy-select select{height:42px;border:1px solid var(--border);border-radius:12px;padding:0 14px;font-size:14px;font-family:inherit;color:var(--text);background:#fff;}
.icon-btn{width:42px;height:42px;border-radius:12px;border:1px solid var(--border);font-size:16px;color:var(--primary);}
.icon-btn:hover{background:var(--primary-light);}
.notif-dot{background:#f76600;top:8px;right:9px;}
.phone-btn{height:42px;padding:0 16px;border-radius:12px;background:var(--primary-light);color:var(--primary);font-size:14px;font-weight:500;}
.avatar{width:44px;height:44px;border-radius:12px;font-size:16px;background:linear-gradient(135deg,#5a4fc0,#3a3080);border:2px solid #f9a24f;}
.qbtn{height:42px;border-radius:12px;font-size:13px;}
.dropdown-panel{border-radius:14px;border:1px solid var(--border);box-shadow:0 12px 32px rgba(71,60,151,.15);top:50px;}
.dropdown-panel a,.dropdown-panel .dd-item{font-size:13.5px;padding:11px 16px;}
.dropdown-header{font-size:14px;padding:12px 16px;}

@media(max-width:768px){.main{margin-left:0 !important;}.sidebar{width:260px;}.topbar{padding:12px 14px;}.page-title{font-size:18px;}}
.topbar{flex-wrap:nowrap;gap:10px;justify-content:space-between;}
.topbar .page-title,.topbar .company-select,.topbar .fy-select,.topbar .qbtn-group{display:none;}
.topbar .topbar-left{flex:1 1 auto;gap:8px;flex-wrap:nowrap;min-width:0;}
.topbar .topbar-right{flex:0 0 auto;width:auto;flex-wrap:nowrap;gap:8px;}
.topbar .topbar-right-secondary{flex-wrap:nowrap;margin-left:0;gap:8px;}
.topbar .ctrl-btn{display:flex;background:var(--primary-light);color:var(--primary);border-color:transparent;}
@media(min-width:769px){.topbar .mobile-toggle{display:none !important;}}

.ctrl-overlay{display:block;position:fixed;inset:0;background:rgba(24,28,50,.55);opacity:0;pointer-events:none;transition:opacity .25s;z-index:1400;}
.ctrl-overlay.show{opacity:1;pointer-events:auto;}
.ctrl-drawer{display:flex;flex-direction:column;position:fixed;top:0;right:0;bottom:0;width:min(340px,88vw);background:#fff;z-index:1500;transform:translateX(100%);visibility:hidden;transition:transform .28s ease,visibility 0s .28s;box-shadow:-12px 0 32px rgba(71,60,151,.18);overflow-y:auto;padding:0 18px 24px;}
.ctrl-drawer.show{transform:translateX(0);visibility:visible;transition:transform .28s ease,visibility 0s;}
.ctrl-head{display:flex;align-items:center;gap:12px;padding:14px 0;border-bottom:1px solid var(--border);}
.ctrl-title{font-size:17px;font-weight:700;color:var(--text);flex:1;}
.ctrl-close{width:40px;height:40px;border-radius:12px;}
.ctrl-body{padding-top:16px;}
.ctrl-field{margin-bottom:12px;}
.ctrl-select{width:100%;height:46px;border:1px solid var(--border);border-radius:12px;padding:0 14px;font-size:14px;font-family:inherit;color:var(--text);background:#fff;}
.ctrl-label{font-size:12.5px;font-weight:600;color:var(--muted);margin:18px 0 8px;padding-top:14px;border-top:1px solid var(--border);}
.ctrl-quick{display:grid;grid-template-columns:1fr 1fr;gap:8px;}
.ctrl-quick a{display:flex;align-items:center;justify-content:center;gap:6px;height:46px;border-radius:12px;background:var(--primary-light);color:var(--primary);font-size:13.5px;font-weight:600;}
.ctrl-quick a i{font-size:11px;}
.ctrl-quick a{-webkit-tap-highlight-color:transparent;cursor:pointer;transition:background .18s,color .18s,transform .18s,box-shadow .18s;}
.ctrl-quick a:hover,.ctrl-quick a:focus,.ctrl-quick a:focus-visible,.ctrl-quick a:active,.ctrl-quick a.is-hover{background:var(--primary) !important;color:#fff !important;transform:translateY(-1px);box-shadow:0 6px 14px rgba(71,60,151,.25);}
.ctrl-quick a:hover i,.ctrl-quick a:focus i,.ctrl-quick a:focus-visible i,.ctrl-quick a:active i,.ctrl-quick a.is-hover i{color:#fff !important;}

@media(min-width:769px){
  .sidebar{width:236px;}
  .sidebar.collapsed{width:64px;}
  .main{margin-left:236px;}
  .main.collapsed{margin-left:64px;}
  .sidebar-header{padding:14px 14px;}
  .sidebar-brand{font-size:17px;gap:10px;}
  .sidebar-brand i{width:34px;height:34px;border-radius:10px;font-size:15px;}
  .sidebar-collapse-btn{width:28px;height:28px;border-radius:8px;font-size:11px;}
  .sidebar-menu{padding:8px 10px 18px;}
  .menu-link{padding:8px 10px;font-size:13px;gap:10px;border-radius:10px;}
  .menu-link i.menu-icon{width:18px;font-size:14px;}
  .submenu .menu-link{font-size:12px;padding:6px 10px;}
  .topbar{padding:8px 18px;}
  .topbar .icon-btn{width:36px;height:36px;border-radius:10px;font-size:14px;}
  .topbar .phone-btn{height:36px;padding:0 12px;border-radius:10px;font-size:13px;}
  .topbar .avatar{width:38px;height:38px;border-radius:10px;font-size:14px;}
  .dropdown-panel{top:44px;}
  .dropdown-panel a,.dropdown-panel .dd-item{font-size:12.5px;padding:9px 14px;}
}

@media(max-width:768px){
  .topbar .ctrl-btn{display:flex;}
  .topbar{padding:8px 10px;gap:6px;}
  .topbar .topbar-left,.topbar .topbar-right,.topbar .topbar-right-secondary{gap:6px;}
  .topbar .icon-btn{width:38px;height:38px;border-radius:10px;font-size:14px;}
  .topbar .phone-btn{height:38px;border-radius:10px;padding:0 10px;gap:5px;}
  .topbar .phone-text{display:none;}
  .topbar .avatar{width:40px;height:40px;border-radius:10px;font-size:14px;}
}
@media(max-width:480px){
  .topbar{padding:8px 8px;}
  .topbar .icon-btn{width:34px;height:34px;}
  .topbar .phone-btn{height:34px;padding:0 8px;}
  .topbar .avatar{width:36px;height:36px;}
}
:root{--btn-blue:#3b6fe0;--btn-blue-dark:#2f59b8;}
.support-btn{display:inline-flex;align-items:center;gap:6px;height:36px;padding:0 12px;border-radius:10px;background:var(--btn-blue);color:#fff;font-size:13px;font-weight:600;white-space:nowrap;flex-shrink:0;border:none;cursor:pointer;transition:background .18s;}
.support-btn:hover{background:var(--btn-blue-dark);color:#fff;}
.support-btn:focus-visible{outline:2px solid var(--btn-blue-dark);outline-offset:2px;}
.support-btn i{font-size:13px;}
@media(max-width:768px){
  .support-btn{height:38px;padding:0 11px;border-radius:10px;}
  .support-btn .support-text{display:none;}
}
@media(max-width:480px){
  .support-btn{height:34px;padding:0 9px;}
}

.hk-hero{display:flex;align-items:center;gap:14px;margin-bottom:18px;}
.hk-back{width:44px;height:44px;border-radius:12px;border:1px solid var(--border);background:#fff;color:var(--primary);display:flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0;}
.hk-back:hover{background:var(--primary-light);}
.hk-hero h1{font-size:26px;font-weight:700;color:var(--primary);line-height:1.15;}
.hk-hero p{font-size:13.5px;color:var(--muted);margin-top:2px;text-transform:uppercase;letter-spacing:.2px;}
.hk-star{margin-left:6px;color:#b9b6d6;font-size:20px;background:none;border:none;}
.hk-star:hover,.hk-star.on{color:#f5a623;}
.hk-hero{margin-bottom:12px;gap:10px;}
.hk-hero h1{font-size:22px;}
.hk-hero p{font-size:12px;}
@media(max-width:768px){.sidebar{width:268px;box-shadow:0 12px 36px rgba(60,50,120,.16);}.overlay-bg{background:rgba(40,30,80,.35);backdrop-filter:blur(2px);}}

.main,.main.collapsed{width:auto;}
.ctrl-select{max-width:none;}
@media(min-width:769px){.fixed-bottom{left:236px;}.fixed-bottom.collapsed{left:64px;}}
@media print{.hk-hero,.ctrl-drawer,.ctrl-overlay{display:none !important;}}
</style>
<style>

.mm-form{font-family:'Poppins','Segoe UI',Roboto,Arial,sans-serif;font-size:13px;line-height:1.4;}
.mm-form [hidden]{display:none !important;}
.mm-form .mm-hide{display:none !important;}
.mm-form .modal-box{background:#fff;border-radius:18px;box-shadow:0 24px 60px rgba(31,29,61,.25);width:100%;max-width:620px;max-height:88vh;display:flex;flex-direction:column;overflow:hidden;position:relative;}
.mm-form .modal-box.mm-w-600{max-width:600px;}
.mm-form .modal-box.mm-w-620{max-width:620px;}
.mm-form .modal-box.mm-w-720{max-width:720px;}
.mm-form .modal-head{display:flex;align-items:center;justify-content:space-between;gap:8px;padding:14px 18px;border-bottom:1px solid var(--border);flex-shrink:0;position:relative;}
.mm-form .modal-head h5{margin:0;font-size:15px;font-weight:700;color:var(--primary);line-height:1.4;}
.mm-form .modal-head-actions{display:flex;align-items:center;gap:6px;}
.mm-form .modal-close{width:32px;height:32px;border-radius:9px;border:none;background:transparent;color:var(--muted);font-size:16px;cursor:pointer;display:flex;align-items:center;justify-content:center;padding:0;}
.mm-form .modal-close:hover{background:var(--bg);color:var(--text);}
.mm-form .icon-btn-sm{width:26px;height:26px;border-radius:5px;border:1px solid var(--border);background:#fff;display:flex;align-items:center;justify-content:center;color:var(--muted);font-size:12px;cursor:pointer;padding:0;}
.mm-form .icon-btn-sm:hover,.mm-form .icon-btn-sm.active{border-color:var(--primary);color:var(--primary);}
.mm-form .modal-body{padding:16px 18px;overflow-y:auto;flex:1 1 auto;}
.mm-form .modal-foot{display:flex;align-items:center;justify-content:flex-end;gap:10px;padding:12px 18px;border-top:1px solid var(--bg);background:#faf9fe;flex-shrink:0;}
.mm-form .btn-modal-save,.mm-form .btn-modal-cancel{height:36px;padding:0 18px;border:none;border-radius:10px;font-size:13px;font-weight:700;font-family:inherit;cursor:pointer;display:inline-flex;align-items:center;justify-content:center;}
.mm-form .btn-modal-save{background:var(--primary);color:#fff;}
.mm-form .btn-modal-save:hover{background:var(--primary-dark);}
.mm-form .btn-modal-cancel{background:#ecebf6;color:var(--text);}
.mm-form .btn-modal-cancel:hover{background:#d4d6e3;}
.mm-form .mm-save-first .btn-modal-save{order:-1;}
.mm-form .form-grid{display:grid;grid-template-columns:1fr 1fr;gap:9px 10px;}
.mm-form .form-grid.g12{gap:10px 12px;}
.mm-form .form-grid.cols-3{grid-template-columns:1fr 1fr 1fr;}
.mm-form .form-section-label{grid-column:1/-1;font-size:10.5px;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:.3px;margin-top:6px;padding-bottom:3px;border-bottom:1px solid var(--border);}
.mm-form .form-section-label:first-child{margin-top:0;}
.mm-form .section-title{font-size:11.5px;font-weight:700;color:var(--primary);text-align:center;text-transform:uppercase;letter-spacing:.3px;margin:14px 0 10px;}
.mm-form .section-title:first-child{margin-top:0;}
.mm-form .field-group{position:relative;border:1px solid var(--border);border-radius:5px;padding:6px 8px 5px;background:#fff;min-width:0;display:flex;align-items:center;min-height:32px;margin:0;gap:0;}
.mm-form .field-group:focus-within{border-color:var(--primary);box-shadow:0 0 0 2px rgba(71,60,151,.08);}
.mm-form .field-group > label:not(.toggle-switch){position:absolute;top:-6px;left:8px;background:#fff;padding:0 4px;font-size:9.5px;font-weight:600;color:var(--primary);line-height:1.3;white-space:nowrap;max-width:calc(100% - 16px);overflow:hidden;text-overflow:ellipsis;z-index:1;}
.mm-form .field-group > label .req,.mm-form .req{color:var(--red,#d93025);margin-left:2px;font-weight:700;}
.mm-form .field-group input:not([type=checkbox]):not([type=radio]),.mm-form .field-group select,.mm-form .field-group textarea{width:100%;height:17px;border:none;outline:none;box-shadow:none;font-size:11.5px;font-family:Arial,sans-serif;color:var(--text);background:transparent;padding:0;min-width:0;max-width:100%;border-radius:0;}
.mm-form .field-group textarea{height:auto;min-height:17px;resize:vertical;line-height:1.4;}
.mm-form .field-group select{cursor:pointer;appearance:none;-webkit-appearance:none;padding-right:14px;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%23777'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 0 center;}
.mm-form .field-group.with-icon{padding-right:34px;}
.mm-form .field-group.two-icons{padding-right:62px;}
.mm-form .field-group .field-icon-btn{position:absolute;right:1px;top:1px;bottom:1px;width:28px;border:none;background:var(--primary);color:#fff;border-radius:0 4px 4px 0;display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:11px;padding:0;}
.mm-form .field-group.two-icons .field-icon-btn.second{right:29px;border-radius:0;background:var(--bg);color:var(--primary);}
.mm-form .field-group .suffix-select{width:auto;flex:0 0 auto;max-width:92px;margin-left:6px;padding-left:6px;border-left:1px solid var(--border);font-size:10.5px;}
.mm-form .field-group-full{grid-column:1/-1;}
.mm-form .span-2{grid-column:span 2;}
.mm-form .field-group.hidden-field,.mm-form .hidden-field{display:none;}
.mm-form .checkbox-row{grid-column:1/-1;display:flex;align-items:center;gap:6px;font-size:11px;color:var(--text);cursor:pointer;}
.mm-form .checkbox-row input{width:14px;height:14px;accent-color:var(--primary);cursor:pointer;margin:0;}
.mm-form .field-group.toggle-field{justify-content:space-between;padding:6px 10px;}
.mm-form .field-group.toggle-field > label:not(.toggle-switch){position:static;background:transparent;padding:0;font-size:12px;font-weight:500;color:var(--text);max-width:none;}
.mm-form .toggle-switch{position:relative;top:0;left:0;display:inline-block;width:32px;height:17px;vertical-align:middle;flex-shrink:0;margin:0;padding:0;background:transparent;}
.mm-form .toggle-switch input{opacity:0;width:0 !important;height:0 !important;position:absolute;}
.mm-form .toggle-slider{position:absolute;cursor:pointer;inset:0;background:#d4d6e3;transition:.2s;border-radius:17px;}
.mm-form .toggle-slider:before{position:absolute;content:"";height:13px;width:13px;left:2px;bottom:2px;background:#fff;transition:.2s;border-radius:50%;}
.mm-form .toggle-switch input:checked + .toggle-slider{background:#0f9d58;}
.mm-form .toggle-switch input:checked + .toggle-slider:before{transform:translateX(15px);}
.mm-form .radio-inline-group{display:flex;align-items:center;gap:14px;padding-top:4px;}
.mm-form .radio-inline{display:flex;align-items:center;gap:5px;font-size:11px;color:var(--text);cursor:pointer;}
.mm-form .radio-inline input{width:14px;height:14px;accent-color:var(--primary);cursor:pointer;margin:0;}
.mm-form .ob-row{display:flex;gap:10px;align-items:stretch;}
.mm-form .ob-row .field-group{flex:1;}
.mm-form .mm-block{grid-column:1/-1;display:block;}
.mm-form .mm-block .field-label{display:block;font-size:10px;font-weight:700;color:var(--primary);margin-bottom:4px;}
.mm-form .itt-fg{padding:6px 8px 5px;}
.mm-form .item-type-toggle{display:inline-flex;border:1px solid var(--border);border-radius:6px;overflow:hidden;}
.mm-form .itt-btn{height:20px;padding:0 14px;font-size:10.5px;font-weight:700;font-family:inherit;border:none;cursor:pointer;}
.mm-form .hsn-search-link{position:absolute;right:8px;top:-8px;background:#fff;padding:0 4px;margin:0;font-size:9px;line-height:1.3;display:flex;align-items:center;gap:4px;color:var(--primary);font-weight:700;cursor:pointer;z-index:2;}
.mm-form .settings-panel{display:none;position:absolute;top:50px;right:50px;width:250px;max-height:340px;overflow-y:auto;background:#fff;border:1px solid var(--border);border-radius:10px;box-shadow:0 12px 32px rgba(31,29,61,.18);z-index:20;padding:4px 0;}
.mm-form .settings-panel.show{display:block;}
.mm-form .settings-panel .sp-title{font-size:10.5px;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:.3px;padding:8px 12px;border-bottom:1px solid var(--border);}
.mm-form .settings-item{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:7px 12px;font-size:12px;color:var(--text);}
.mm-form .settings-item:hover{background:var(--primary-light);}
.mm-form .os-wrap,.mm-form #openingStockRows{grid-column:1/-1;display:grid;gap:10px;}
.mm-form .os-row{display:grid;grid-template-columns:1fr 1fr;gap:9px 10px;align-items:start;background:transparent;border:none;padding:0;position:relative;}
.mm-form .os-row .os-remove{grid-column:1/-1;justify-self:end;width:26px;height:26px;border-radius:5px;position:static;}
.mm-form .os-field{position:relative;border:1px solid var(--border);border-radius:5px;padding:6px 8px 5px;background:#fff;min-height:32px;display:flex;align-items:center;}
.mm-form .os-field:focus-within{border-color:var(--primary);box-shadow:0 0 0 2px rgba(71,60,151,.08);}
.mm-form .os-label{position:absolute;top:-6px;left:8px;background:#fff;padding:0 4px;font-size:9.5px;font-weight:600;color:var(--primary);line-height:1.3;white-space:nowrap;}
.mm-form .os-field input{width:100%;height:17px;border:none;outline:none;background:transparent;font-size:11.5px;font-family:Arial,sans-serif;color:var(--text);padding:0;}
.mm-form .os-summary-row{grid-column:1/-1;display:grid;grid-template-columns:1fr 1fr;gap:9px 10px;margin:0;padding:0;border:none;background:transparent;}
.mm-form .add-charge-btn{grid-column:1/-1;justify-self:start;}
#newPartyRubberDealerSection{display:contents;}
.mm-form .form-grid:has(#newPartyRubberDealerSection[style*="none"]) #newPartyCreditGroup{grid-column:span 2;}
.mm-form .rubber-panel{width:250px;padding:10px 0;}
.mm-form .rubber-fields{display:grid;gap:12px;padding:12px;border-top:1px dashed var(--border);}
@media(max-width:768px){
  .mm-form .form-grid,.mm-form .form-grid.cols-3{grid-template-columns:1fr;}
  .mm-form .span-2{grid-column:span 1;}
  .mm-form .os-row,.mm-form .os-summary-row{grid-template-columns:1fr 1fr;}
  .mm-form .settings-panel{right:16px;}
}
@media(max-width:480px){.mm-form .modal-box{max-width:100%;}.mm-form .modal-head{padding:12px 14px;}.mm-form .modal-body{padding:14px;}.mm-form .modal-foot{padding:10px 14px;}}

.ctrl-help{display:none;margin-top:6px;}
@media(max-width:768px){
  #supportBtn,.topbar .support-btn,.topbar .phone-wrap{display:none !important;}
  .ctrl-help{display:block;}
}
</style>
<style>

.main,.fixed-bottom,.modal-overlay{font-family:'Poppins','Segoe UI',Roboto,Arial,sans-serif;}
.main{font-size:13px;line-height:1.4;}
.main input,.main select,.main textarea,.modal-overlay input,.modal-overlay select,.modal-overlay textarea{font-family:Arial,sans-serif;}
.card h5{font-size:11.5px;font-weight:700;letter-spacing:.3px;text-transform:uppercase;color:var(--primary);}
.addr-title,.addr-card strong,.addr-box strong,.card strong{font-size:12px;}
.addr-text,.addr-summary{font-size:11.5px;}
.addr-actions button,.addr-add-btn,.same-as-billing,.check-row,.field-label,.radio-row label,.checkbox-row{font-size:11.5px;}
.summary-row span,.summary-row strong,.summary-row label{font-size:12px;}
.summary-row.grand span,.summary-row.grand strong{font-size:14px;}
table.item-table thead th{font-size:11px;}
.item-name-desc input{font-size:11px;}
.ai-btn{font-size:12px;}
.btn{height:36px;padding:0 18px;border-radius:10px;font-size:13px;font-family:inherit;}
.fixed-bottom .btn{height:36px;border-radius:10px;font-size:13px;}
.btn-outline{background:#ecebf6;}

.mm-form .modal-head h4{margin:0;font-size:15px;font-weight:700;color:var(--primary);line-height:1.4;white-space:normal;}
.mm-form .modal-head-actions{display:flex;align-items:center;gap:8px;}
.mm-form .modal-box.wide{max-width:720px;}
.mm-form .form-row{display:flex;flex-wrap:wrap;gap:9px 10px;margin-bottom:9px;}
.mm-form .modal-section-head{font-size:11.5px;font-weight:700;color:var(--primary);text-align:center;text-transform:uppercase;letter-spacing:.3px;margin:14px 0 8px;padding-top:10px;}
.mm-form .modal-foot .btn{height:36px;padding:0 18px;border-radius:10px;font-size:13px;font-weight:700;}
.mm-form .modal-foot .btn-primary{background:var(--primary);color:#fff;}
.mm-form .modal-foot .btn-outline{background:#ecebf6;color:var(--text);}
.mm-form .modal-foot{background:#faf9fe;padding:12px 18px;gap:10px;}
</style>
<style>

.mm-form .addr-tabs{display:flex;gap:4px;margin-bottom:12px;border-bottom:1px solid var(--border);}
.mm-form .addr-tab{background:none;border:none;border-bottom:2px solid transparent;margin-bottom:-1px;padding:8px 14px;font-family:inherit;font-size:12px;font-weight:700;color:var(--muted);cursor:pointer;}
.mm-form .addr-tab:hover{color:var(--primary);}
.mm-form .addr-tab.active{color:var(--primary);border-bottom-color:var(--primary);}
.mm-form .addr-tab-count{font-weight:600;opacity:.75;}
.mm-form .modal-foot .addr-add-new{margin-right:auto;}

@media(min-width:769px){
  #cfgFieldEstimateSaleInput > .form-col{flex:0 1 calc(50% - 5px);max-width:calc(50% - 5px);}
}

.addr-add-btn,.addr-add-new,.add-charge-btn{background:#fff;color:#0f9d58;border-color:#0f9d58;}
.addr-add-btn:hover,.addr-add-new:hover,.add-charge-btn:hover{background:#e8f6ef;color:#0b7f46;border-color:#0b7f46;}
.addr-add-new{border:1px dashed #0f9d58;border-radius:5px;padding:6px 12px;font-family:inherit;font-weight:700;font-size:11.5px;display:flex;align-items:center;gap:4px;cursor:pointer;}
.add-line-btn{background:#0f9d58;border-color:#0f9d58;color:#fff;}
.add-line-btn:hover{background:#0b7f46;border-color:#0b7f46;}
.field-icon-btn[data-modal],.mm-form .field-group .field-icon-btn[data-modal],.js-add-item,.icon-add-inline{background:#0f9d58;color:#fff;}
.item-search-wrap .js-add-item{background:#0f9d58;}
.item-search-wrap .js-add-item:hover{background:#0b7f46;}
.field-icon-btn[data-modal]:hover,.mm-form .field-group .field-icon-btn[data-modal]:hover,.js-add-item:hover,.icon-add-inline:hover{background:#0b7f46;}
</style>
<style>
:root{--pu:#5b2fa8;--pu-d:#46218a;--pu-m:#8a63d2;--pu-l:#f2ecfc;--pu-xl:#f8f5fe;--teal:#0f857f;--teal-d:#0a6b66;--teal-l:#e4f5f3;--gr:#1fb36b;--gr-d:#13935a;--gr-l:#e8f8f0;--gr-b:#bfe8d3;--line:#e6e8f2;--r:14px;--sh:0 4px 18px rgba(80,60,160,.07);}
body{font-family:'Poppins','Segoe UI',Roboto,Arial,sans-serif;font-size:13px;background:linear-gradient(180deg,#e3f6f4 0,#f3f7fb 280px) fixed,#f3f7fb;line-height:1.45;}
.content .tab-tools{display:flex;justify-content:flex-end;align-items:center;gap:8px;margin-bottom:8px;flex-wrap:wrap;}
.content .round-btn{width:38px;height:38px;border-radius:50%;border:1px solid var(--line);background:#fff;color:var(--pu);display:flex;align-items:center;justify-content:center;box-shadow:var(--sh);font-size:13px;}
.content .round-btn:hover{background:var(--pu-l);}
.content .grid{display:grid;gap:12px;margin-bottom:12px;}
.content .g-top{grid-template-columns:1.25fr 1fr;align-items:stretch;}
.content .g-party{grid-template-columns:1fr 1fr 1fr;align-items:stretch;}
.content .g-bottom{grid-template-columns:1.15fr 1fr;align-items:stretch;}
.content .stack{display:flex;flex-direction:column;gap:12px;min-width:0;}
.content .stack>.grow{flex:1;}
.content .card{background:#fff;border-radius:var(--r);box-shadow:var(--sh);padding:12px 14px;min-width:0;}
.content .card-h{display:flex;align-items:center;gap:10px;margin-bottom:10px;}
.content .card-h .ci{width:30px;height:30px;border-radius:50%;background:var(--pu-l);color:var(--pu);display:flex;align-items:center;justify-content:center;font-size:13px;flex-shrink:0;}
.content .card-h .ci.t{background:var(--teal-l);color:var(--teal);}
.content .card-h .ci.g{background:var(--gr-l);color:var(--gr-d);}
.content .card-h h3{font-size:14px;font-weight:700;color:var(--pu-d);flex:1;}
.content .card-h .ch-act{display:flex;gap:6px;align-items:center;flex-wrap:wrap;}
.content .ac{background:#fff;border:1px solid #d3e5e0;border-radius:16px;padding:14px 18px 12px;min-width:0;box-shadow:var(--sh);}
.content .ac-h{display:flex;align-items:center;gap:14px;padding-bottom:12px;border-bottom:1px solid #cfe3de;margin-bottom:10px;flex-wrap:wrap;}
.content .ac-ic{width:46px;height:46px;border-radius:14px;background:#eaf6f0;color:#14803c;display:flex;align-items:center;justify-content:center;font-size:19px;flex-shrink:0;}
.content .ac-h h3{font-size:16px;font-weight:600;color:#1d2b25;flex:1;min-width:120px;}
.content .ac-acts{display:flex;gap:6px;align-items:center;flex-wrap:wrap;}
.content .ib{width:34px;height:34px;border-radius:10px;border:1px solid #cfe3de;background:#fff;color:#14803c;display:flex;align-items:center;justify-content:center;font-size:14px;}
.content .ib:hover{background:#eaf6f0;}
.content .ib.add{background:#14803c;color:#fff;border-color:#14803c;}
.content .ib.add:hover{background:#0f6a31;}
.content .same-chk{display:flex;align-items:center;gap:6px;font-size:12px;font-weight:600;color:#1d2b25;cursor:pointer;white-space:nowrap;}
.content .same-chk input{width:15px;height:15px;accent-color:#14803c;}
.content .ac-blk{padding:2px 0;}
.content .ac-blk+.ac-blk{margin-top:8px;padding-top:8px;border-top:1px dashed #cfe3de;}
.content .ac-line{display:flex;gap:12px;align-items:flex-start;padding:5px 0;font-size:14px;color:#222;overflow-wrap:anywhere;line-height:1.45;}
.content .ac-line:before{content:"";width:9px;height:9px;border-radius:50%;background:#12803b;box-shadow:0 0 0 3px #e3f4ea;margin-top:7px;flex-shrink:0;}
.content .ac-line.b{font-weight:700;color:#111;}
.content .ac-empty{border:1.5px dashed #bfe0d2;background:#fbfefc;border-radius:12px;padding:16px;text-align:center;color:var(--muted);font-size:12.5px;}
.content .ac-empty i{display:block;font-size:24px;color:var(--gr);margin-bottom:4px;}
.content .ac-sub{font-size:11.5px;color:var(--muted);margin-top:8px;font-weight:500;}
.content .fgrid{display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:10px 12px;}
.content .fgrid.c2{grid-template-columns:1fr 1fr;}
.content .fgrid.c3{grid-template-columns:repeat(3,1fr);}
.content .fld{display:flex;flex-direction:column;gap:4px;min-width:0;position:relative;}
.content .fld>label{font-size:11.5px;font-weight:600;color:var(--pu-d);}
.content .fld>label .req{color:var(--red);}
.content .fld input,.content .fld select,.content .fld textarea{width:100%;height:38px;border:1px solid var(--line);border-radius:10px;padding:0 12px;background:#fff;outline:none;transition:border .15s,box-shadow .15s;}
.content .fld input[type=checkbox],.content .fld input[type=radio]{width:auto;height:auto;}
.content .fld textarea{height:auto;min-height:64px;padding:9px 12px;resize:vertical;}
.content .fld input:focus,.content .fld select:focus,.content .fld textarea:focus{border-color:var(--pu-m);box-shadow:0 0 0 3px rgba(91,47,168,.1);}
.content .fld input[readonly]{background:var(--pu-xl);}
.content .fld input.bal-dr{color:var(--gr-d);font-weight:700;}
.content .fld input.bal-cr{color:var(--red);font-weight:700;}
.content .fld select{appearance:none;-webkit-appearance:none;padding-right:30px;background:#fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%235b2fa8'/%3E%3C/svg%3E") no-repeat right 12px center;cursor:pointer;}
.content .fld .with-btn{display:flex;gap:6px;}
.content .fld .with-btn>input,.content .fld .with-btn>select{flex:1;min-width:0;}
.content .fld .prefix{display:flex;align-items:center;border:1px solid var(--line);border-radius:10px;background:#fff;overflow:hidden;}
.content .fld .prefix select{flex:0 1 auto;width:auto;max-width:62%;height:36px;border:none;border-right:1px solid var(--line);border-radius:0;box-shadow:none;padding:0 26px 0 12px;font-weight:700;color:var(--pu);background-position:right 9px center;text-overflow:ellipsis;}
.content .fld .prefix input{flex:1;min-width:0;width:auto;border:none;box-shadow:none !important;padding-left:10px;}
.content .fld .unit{display:flex;gap:6px;}
.content .fld .unit select{width:104px;flex-shrink:0;}
.content .fld.sel-ro input{background:var(--pu-xl);font-weight:600;color:var(--pu-d);}
.content .fld .hsn-link{position:absolute;right:2px;top:0;font-size:10.5px;font-weight:700;color:var(--pu);cursor:pointer;display:flex;gap:4px;align-items:center;}
.content .btn{border:none;border-radius:10px;height:38px;padding:0 18px;font-weight:600;font-size:13px;display:inline-flex;align-items:center;justify-content:center;gap:8px;white-space:nowrap;transition:all .15s;}
.content .btn-p{background:var(--pu);color:#fff;}
.content .btn-p:hover{background:var(--pu-d);}
.content .btn-o{background:#fff;color:var(--pu);border:1.5px solid #c9b8ea;}
.content .btn-o:hover{background:var(--pu-l);border-color:var(--pu-m);}
.content .btn-g{background:linear-gradient(90deg,#2cc47a,#0f857f);color:#fff;}
.content .btn-g:hover{filter:brightness(.95);}
.content .btn-gl{background:#fff;color:var(--gr-d);border:1.5px solid var(--gr);}
.content .btn-gl:hover{background:var(--gr-l);}
.content .btn-sm{height:30px;padding:0 12px;font-size:12px;border-radius:8px;}
.content .btn-ic{width:38px;padding:0;flex-shrink:0;}
.content .btn-add{background:var(--gr);color:#fff;}
.content .btn-add:hover{background:var(--gr-d);}
.content .btn-del{background:#fdecec;color:var(--red);}
.content .btn-del:hover{background:#fbd5d5;}
.content .seg{display:inline-flex;background:var(--pu-xl);border:1px solid var(--line);border-radius:10px;padding:3px;gap:2px;}
.content .seg label{cursor:pointer;}
.content .seg input{display:none;}
.content .seg span{display:block;padding:5px 12px;border-radius:8px;font-size:12px;font-weight:600;color:var(--muted);}
.content .seg input:checked+span{background:var(--pu);color:#fff;}
.content .pm{display:flex;align-items:center;gap:6px;font-size:12px;font-weight:600;color:var(--pu-d);}
.content .pm select{height:32px;border:1px solid var(--line);border-radius:8px;padding:0 8px;background:#fff;font-weight:600;}
.content .upload{border:2px dashed #b9a3e3;background:var(--pu-xl);border-radius:12px;padding:14px;text-align:center;cursor:pointer;position:relative;transition:background .15s;}
.content .upload:hover,.content .upload.drag{background:var(--pu-l);}
.content .upload i{font-size:26px;color:var(--pu);}
.content .upload b{display:block;color:var(--pu-d);font-size:12.5px;margin-top:2px;}
.content .upload small{color:var(--muted);font-size:11px;}
.content .upload input{position:absolute;inset:0;opacity:0;cursor:pointer;}
.content .chips{display:flex;flex-wrap:wrap;gap:6px;margin-top:8px;}
.content .hscroll{overflow-x:auto;}
.content .sub-h{font-size:12.5px;font-weight:700;color:var(--pu-d);margin:12px 0 8px;display:flex;align-items:center;gap:8px;}
.content .sub-h i{color:var(--pu);}
.content .sum-card{padding:0;overflow:hidden;}
.content .sum-head{background:linear-gradient(90deg,var(--pu) 0,#8f6bd6 70%,#cdbbf0 100%);color:#fff;padding:11px 16px;display:flex;align-items:center;gap:10px;font-weight:700;font-size:14px;}
.content .sum-body{padding:10px 16px 14px;}
.content .srow{display:flex;justify-content:space-between;align-items:center;padding:4px 0;font-size:12.5px;font-weight:600;gap:8px;}
.content .srow span:last-child{font-variant-numeric:tabular-nums;}
.content .srow input{width:96px;height:30px;border:1px solid var(--line);border-radius:8px;text-align:right;padding:0 8px;}
.content .srow .dual{display:flex;gap:6px;}
.content .srow .dual input.pct{width:58px;}
.content .srow .dual input.amt{width:92px;background:var(--pu-xl);}
.content .auto{font-size:10px;font-weight:700;color:var(--pu);background:var(--pu-l);border:none;border-radius:8px;padding:2px 8px;margin-left:6px;}
.content .grand{display:flex;justify-content:space-between;align-items:center;background:var(--pu-l);border-radius:12px;padding:11px 14px;margin-top:8px;color:var(--pu);font-weight:700;font-size:16px;}
.content .tw{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:10px;}
.content .tw label{display:flex;align-items:center;gap:8px;background:var(--pu-xl);border:1px solid var(--line);border-radius:10px;padding:7px 12px;font-weight:600;font-size:12px;cursor:pointer;}
.content .tw label:has(input:checked){background:var(--pu-l);border-color:var(--pu-m);color:var(--pu);}
.content .tw input{accent-color:var(--pu);}
.content .partb{background:var(--pu-xl);border:1px dashed var(--pu-m);border-radius:12px;padding:10px;margin-top:6px;display:none;}
.content .partb.show{display:block;}
.content .partb-h{text-align:center;color:var(--pu);font-weight:700;font-size:12px;margin-bottom:8px;letter-spacing:.4px;}
.content .pay-card{margin-bottom:12px;}
.content .pay-toggle{width:100%;background:none;border:none;text-align:left;margin-bottom:0;padding:0;color:inherit;}
.content .pay-sum{font-size:13px;font-weight:700;color:var(--pu);margin-right:6px;white-space:nowrap;}
.content .pay-chev{color:var(--pu);font-size:12px;transition:transform .2s ease;}
.content .pay-card.open .pay-chev{transform:rotate(180deg);}
.content .pay-body{margin-top:12px;}
.content .bar{position:fixed;left:236px;right:0;bottom:0;background:#fff;box-shadow:0 -4px 18px rgba(80,60,160,.1);padding:10px 18px;display:grid;grid-template-columns:1fr 1fr 1.3fr .9fr;gap:12px;z-index:800;transition:left .25s;}
.content .bar.collapsed{left:64px;}
.content .bar .btn{height:40px;width:100%;}
@media(max-width:1100px){.content .g-top,.content .g-party,.content .g-bottom{grid-template-columns:1fr 1fr;}
.content .g-party>.card:first-child{grid-column:1/-1;}}
@media(max-width:768px){.content .g-top,.content .g-party,.content .g-bottom,.content .fgrid.c2,.content .fgrid.c3,.content .cfg-list,.content .os-row,.content .os-sum{grid-template-columns:1fr;}
.content .bar,.content .bar.collapsed{left:0;grid-template-columns:1fr 1fr;padding:10px 12px;}
.content{padding:10px 10px 130px;}
.content .modal-overlay{padding:0;align-items:flex-end;}
.content .modal-box,.content .modal-box.w6,.content .modal-box.w7,.content .bank-box{max-width:100%;border-radius:18px 18px 0 0;max-height:94vh;}
.content .settings-panel{right:16px;}
.content .ph-head-sw span{display:none;}}
@media(max-width:768px){.content .g-bottom{display:flex;flex-direction:column;}
.content .g-bottom>.stack{display:contents;}
.content .g-bottom>.stack>.grow{flex:none;}
.content #sumSec{order:1;}
.content #bankSec{order:2;}
.content #uploadSec{order:3;}
.content #chargesSec{order:4;}
.content #termsSec{order:5;}
.content #noteSec{order:6;}
.content #transportSec{order:7;}}

.content .fld .prefix span.prefix-text{flex:0 0 auto;display:flex;align-items:center;height:36px;padding:0 12px;border-right:1px solid var(--line);font-weight:700;color:var(--pu);font-size:12.5px;background:var(--pu-xl);white-space:nowrap;}
.content .dc{display:contents;}
.content .fld input,.content .fld select,.content .fld textarea,.content .srow input,.content .upload input,.content .pm select,.content .charge-row input,.content .charge-row select{font-family:inherit;font-size:12.5px;}
.content .charge-row input,.content .charge-row select{height:34px;border:1px solid var(--line);border-radius:8px;padding:0 8px;font-size:12px;}
.content .upload-list{display:flex;flex-wrap:wrap;gap:6px;margin-top:8px;}
.content .upload-chip{background:#fff;border:1px solid var(--line);border-radius:8px;padding:4px 8px;font-size:11.5px;}
.content .add-charge-btn{display:none;}
.content .ac-acts .ib{padding:0;}
.content .ac-acts .ib.addr-add-btn{background:#14803c;color:#fff;border:1px solid #14803c;}
.content .ac-acts .ib.addr-choose-btn{background:#fff;color:#14803c;border:1px solid #cfe3de;}
.content .ac-acts .ib.addr-add-btn:hover{background:#0f6a31;}
.content .ac-acts .ib.addr-choose-btn:hover{background:#eaf6f0;}
.content .card .ci{flex-shrink:0;}
.content .g-bottom .stack>.card h3{margin:0;}
.content .fld>label{text-transform:none;letter-spacing:0;}
.content .fld.readonly input,.content .fld input[readonly]{background:var(--pu-xl);}
.content .item-table-card .card-h{margin-bottom:10px;}
.content .item-table-card .ch-act{margin-left:auto;}
.content .item-table-card .pm .ipm-select{height:32px;}
.content .tab-tools .ai-btn{height:38px;}
@media(max-width:768px){
.content .g-bottom{display:flex;flex-direction:column;}
.content .g-bottom>.stack{display:contents;}
.content .g-bottom>.stack>.grow{flex:none;}
.content #sumSec{order:1;}
.content #bankDetailsSection{order:2;}
.content #uploadDocumentSection{order:3;}
.content #chargesSec{order:4;}
.content #termsSection{order:5;}
.content #noteSection{order:6;}
.content #transportSec{order:7;}
}

</style>
<style>
.item-table-wrap{border:1px solid var(--line);border-radius:10px;}
table.item-table thead th{background:var(--teal);border-right:1px solid rgba(255,255,255,.18);}
table.item-table tfoot td{background:var(--teal-l);color:var(--teal-d);border-top:2px solid var(--teal);}
.modal-overlay.mm-form{background:rgba(30,20,60,.5);backdrop-filter:blur(3px);}
.mm-form .modal-box{border-radius:18px;box-shadow:0 24px 60px rgba(31,29,61,.28);}
.mm-form .modal-head{justify-content:flex-start;gap:12px;padding:14px 18px;border-bottom:1px solid var(--line);background:linear-gradient(90deg,var(--pu-xl),#fff);position:relative;}
.mm-form .mh-ic{width:38px;height:38px;border-radius:12px;background:var(--pu);color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0;}
.mm-form .mh-ic.g{background:var(--gr);}
.mm-form .mh-ic.t{background:var(--teal);}
.mm-form .mh-txt{flex:1;min-width:0;}
.mm-form .modal-head h4,.mm-form .modal-head h5{margin:0;font-size:15px;font-weight:700;color:var(--pu-d);line-height:1.2;white-space:normal;}
.mm-form .mh-sub{margin:0;font-size:11.5px;color:var(--muted);font-weight:400;}
.mm-form .modal-head-actions{margin-left:auto;gap:6px;}
.mm-form .modal-head>.modal-close{margin-left:auto;}
.mm-form .modal-close{width:32px;height:32px;border-radius:9px;font-size:16px;color:var(--muted);}
.mm-form .modal-close:hover{background:var(--pu-l);color:var(--pu);}
.mm-form .icon-btn-sm{width:32px;height:32px;border-radius:9px;border:1px solid var(--line);color:var(--muted);font-size:13px;}
.mm-form .icon-btn-sm:hover,.mm-form .icon-btn-sm.active{color:var(--pu);border-color:var(--pu-m);}
.mm-form .btn-fetch-gstin-header{background:var(--gr);border-radius:9px;height:32px;padding:0 12px;font-size:11.5px;font-weight:700;}
.mm-form .modal-body{padding:16px 18px;}
.mm-form .modal-foot{gap:10px;padding:12px 18px;border-top:1px solid var(--line);background:#faf9fe;}
.mm-form .btn-modal-save,.mm-form .btn-modal-cancel{height:38px;padding:0 18px;border-radius:10px;font-size:13px;font-weight:600;display:inline-flex;align-items:center;gap:8px;}
.mm-form .btn-modal-save{background:var(--pu);color:#fff;}
.mm-form .btn-modal-save:hover{background:var(--pu-d);}
.mm-form .btn-modal-cancel{background:#fff;color:var(--pu);border:1.5px solid #c9b8ea;}
.mm-form .btn-modal-cancel:hover{background:var(--pu-l);border-color:var(--pu-m);}
.mm-form .addr-add-new{height:38px;padding:0 16px;border-radius:10px;background:#fff;color:var(--gr-d);border:1.5px solid var(--gr);font-size:13px;font-weight:600;display:inline-flex;align-items:center;gap:8px;}
.mm-form .addr-add-new:hover{background:var(--gr-l);}
.mm-form .form-grid,.mm-form .form-grid.g12{gap:10px 12px;}
.mm-form .form-section-label,.mm-form .section-title{grid-column:1/-1;display:flex;align-items:center;gap:8px;font-size:12px;font-weight:700;color:var(--teal-d);text-transform:uppercase;letter-spacing:.4px;text-align:left;margin:6px 0 0;}
.mm-form .form-section-label:after,.mm-form .section-title:after{content:"";flex:1;height:1px;background:var(--line);}
.mm-form .section-title{margin:0 0 10px;}
.mm-form .field-group{flex-direction:column;align-items:stretch;gap:4px;border:none;border-radius:0;padding:0;background:none;box-shadow:none;}
.mm-form .field-group:focus-within{border:none;box-shadow:none;}
.mm-form .field-group>label:not(.toggle-switch){position:static;background:none;padding:0;max-width:none;white-space:normal;font-size:11.5px;font-weight:600;color:var(--pu-d);}
.mm-form .field-group input:not([type=checkbox]):not([type=radio]),.mm-form .field-group select,.mm-form .field-group textarea{width:100%;height:38px;border:1px solid var(--line);border-radius:10px;padding:0 12px;background-color:#fff;font-family:inherit;font-size:12.5px;color:var(--text);outline:none;transition:border .15s,box-shadow .15s;}
.mm-form .field-group textarea{height:auto;min-height:64px;padding:9px 12px;}
.mm-form .field-group input:focus,.mm-form .field-group select:focus,.mm-form .field-group textarea:focus{border-color:var(--pu-m);box-shadow:0 0 0 3px rgba(91,47,168,.1);}
.mm-form .field-group select{appearance:none;-webkit-appearance:none;padding-right:30px;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%235b2fa8'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 12px center;}
.mm-form .field-group input[readonly]{background-color:var(--pu-xl);}
.mm-form .field-group.with-icon{padding-right:0;}
.mm-form .field-group.with-icon input:not([type=checkbox]):not([type=radio]),.mm-form .field-group.with-icon select{width:calc(100% - 44px);}
.mm-form .field-group.two-icons input:not([type=checkbox]):not([type=radio]),.mm-form .field-group.two-icons select{width:calc(100% - 88px);}
.mm-form .field-group .field-icon-btn{top:auto;bottom:0;right:0;width:38px;height:38px;border-radius:10px;background:var(--gr);color:#fff;font-size:13px;}
.mm-form .field-group .field-icon-btn:hover{background:var(--gr-d);}
.mm-form .field-group .field-icon-btn[title*="Fetch"]{background:var(--pu);}
.mm-form .field-group .field-icon-btn[title*="Fetch"]:hover{background:var(--pu-d);}
.mm-form .field-group.two-icons .field-icon-btn.second{right:44px;background:#fff;color:var(--pu);border:1px solid var(--line);}
.mm-form .field-group .suffix-select{width:auto;max-width:92px;}
.mm-form .hsn-search-link{position:absolute;right:0;top:0;background:none;padding:0;font-size:10.5px;font-weight:700;color:var(--pu);}
.mm-form .field-group.toggle-field{flex-direction:row;align-items:center;justify-content:space-between;gap:10px;background:var(--pu-xl);border-radius:10px;padding:8px 12px;}
.mm-form .field-group.toggle-field>label:not(.toggle-switch){font-size:12.5px;font-weight:600;color:var(--pu-d);}
.mm-form .toggle-switch{width:38px;height:21px;}
.mm-form .toggle-slider{border-radius:21px;background:#cfd2e2;}
.mm-form .toggle-slider:before{height:15px;width:15px;left:3px;bottom:3px;}
.mm-form .toggle-switch input:checked+.toggle-slider{background:var(--gr);}
.mm-form .toggle-switch input:checked+.toggle-slider:before{transform:translateX(17px);}
.mm-form .item-type-toggle{border:1px solid var(--line);border-radius:10px;padding:0;}
.mm-form .itt-btn{height:34px;padding:0 22px;font-size:12.5px;font-weight:600;color:var(--muted);background:#fff;}
.mm-form .itt-btn.active{background:var(--pu);color:#fff;}
.mm-form .checkbox-row,.mm-form .radio-inline{font-size:12px;font-weight:600;color:var(--pu-d);}
.mm-form .checkbox-row input,.mm-form .radio-inline input{accent-color:var(--pu);}
.mm-form .os-field{flex-direction:column;align-items:stretch;gap:4px;border:none;border-radius:0;padding:0;min-height:0;background:none;box-shadow:none;}
.mm-form .os-label{position:static;background:none;padding:0;font-size:11.5px;font-weight:600;color:var(--pu-d);}
.mm-form .os-field input{height:38px;border:1px solid var(--line);border-radius:10px;padding:0 12px;font-family:inherit;font-size:12.5px;background:#fff;}
.mm-form .settings-panel{border-radius:12px;border:1px solid var(--line);}
.mm-form .settings-panel .sp-title{color:var(--pu);}
.mm-form .settings-item:hover{background:var(--pu-xl);}
.mm-form .addr-tabs{display:flex;gap:4px;background:var(--pu-xl);border-radius:12px;padding:4px;margin-bottom:14px;border-bottom:none;overflow-x:auto;}
.mm-form .addr-tab{flex:1;border:none;border-radius:9px;margin:0;padding:8px 12px;font-size:12.5px;font-weight:600;color:var(--muted);white-space:nowrap;background:transparent;}
.mm-form .addr-tab:hover{color:var(--pu);}
.mm-form .addr-tab.active{background:#fff;color:var(--pu);border-bottom-color:transparent;box-shadow:0 2px 8px rgba(80,60,160,.12);}
.mm-form .addr-list{gap:8px;max-height:340px;}
.mm-form .addr-row{gap:10px;padding:10px 12px;border:1.5px solid var(--line);border-radius:14px;background:#fff;}
.mm-form .addr-row:hover{border-color:var(--gr);}
.mm-form .addr-row.selected{border-color:var(--gr);background:var(--gr-l);}
.mm-form .addr-row input{margin-top:4px;width:16px;height:16px;accent-color:#14803c;}
.mm-form .addr-title{font-size:13px;font-weight:700;color:var(--text);}
.mm-form .addr-gstin{background:var(--pu-l);color:var(--pu);font-size:10.5px;padding:1px 7px;}
.mm-form .addr-text{font-size:12.5px;color:var(--text);}
.mm-form .addr-actions{flex-direction:row;gap:4px;}
.mm-form .addr-actions button{width:30px;height:30px;border-radius:8px;border:1px solid var(--line);background:#fff;color:var(--muted);font-size:12px;}
.mm-form .addr-actions button:hover{color:var(--pu);border-color:var(--pu-m);}
.mm-form .addr-empty{text-align:center;padding:26px 10px;color:var(--muted);font-size:12.5px;}
@media(max-width:768px){
.modal-overlay.mm-form{padding:0;align-items:flex-end;}
.mm-form .modal-box,.mm-form .modal-box.mm-w-600,.mm-form .modal-box.mm-w-620,.mm-form .modal-box.mm-w-720,.mm-form .modal-box.wide{max-width:100%;border-radius:18px 18px 0 0;max-height:94vh;}
}
</style>
<style>
.mm-form .modal-box.mm-w-620,#addItemModal .modal-box,#addPartyModal .modal-box{max-width:780px;}
.mm-form .mm-tabs{display:flex;gap:4px;background:var(--pu-xl);border-radius:12px;padding:4px;margin-bottom:14px;overflow-x:auto;}
.mm-form .mm-tabs button{flex:1;border:none;background:transparent;padding:8px 12px;border-radius:9px;font-family:inherit;font-weight:600;font-size:12.5px;color:var(--muted);white-space:nowrap;cursor:pointer;}
.mm-form .mm-tabs button.on{background:#fff;color:var(--pu);box-shadow:0 2px 8px rgba(80,60,160,.12);}
.mm-form .mm-tp{display:none;}
.mm-form .mm-tp.on{display:grid;}
.mm-form .mm-seg{display:inline-flex;align-self:flex-end;background:var(--pu-xl);border:1px solid var(--line);border-radius:10px;padding:3px;gap:2px;}
.mm-form .mm-seg label{cursor:pointer;}
.mm-form .mm-seg input{display:none;}
.mm-form .mm-seg span{display:block;padding:7px 14px;border-radius:8px;font-size:12px;font-weight:600;color:var(--muted);}
.mm-form .mm-seg input:checked+span{background:var(--pu);color:#fff;}
.mm-form .ob-row{align-items:flex-end;}
.mm-form .opening-stock-wrap,.mm-form #openingStockRows{grid-column:1/-1;display:grid;gap:10px;}
.mm-form .os-row{grid-template-columns:1fr 1fr;gap:10px 12px;background:var(--pu-xl);border:1px solid var(--line);border-radius:12px;padding:12px;}
.mm-form .os-row .os-remove{grid-column:1/-1;justify-self:end;width:auto;height:30px;padding:0 12px;border:none;border-radius:8px;background:#fdecec;color:var(--red);font-family:inherit;font-size:12px;font-weight:600;display:inline-flex;align-items:center;gap:6px;position:static;cursor:pointer;}
.mm-form .os-row .os-remove:hover{background:#fbd5d5;}
.mm-form .add-charge-btn{grid-column:1/-1;justify-self:start;height:30px;padding:0 12px;border-radius:8px;background:#fff;color:var(--gr-d);border:1.5px solid var(--gr);font-family:inherit;font-size:12px;font-weight:600;display:inline-flex;align-items:center;gap:8px;cursor:pointer;}
.mm-form .add-charge-btn:hover{background:var(--gr-l);}
.mm-form .os-label{text-transform:none;letter-spacing:0;}
.mm-form .os-field input[readonly]{background:var(--pu-xl);font-weight:400;color:var(--text);}
.mm-form .os-summary-row{grid-column:1/-1;background:var(--pu-l);border:1px dashed var(--pu-m);border-radius:12px;padding:10px;gap:10px 12px;}
#addBankModal .modal-head{background:#fff;padding:20px 22px 16px;}
#addBankModal .modal-head h4,#addBankModal .modal-head h5{font-size:16px;color:var(--primary);}
#addBankModal .modal-body{padding:18px 22px 22px;}
#addBankModal .field-group>label:not(.toggle-switch){font-size:12px;font-weight:700;color:var(--text);}
#addBankModal .field-group input:not([type=checkbox]):not([type=radio]),#addBankModal .field-group select{height:42px;border-radius:12px;font-size:13px;}
#addBankModal .modal-foot{padding:16px 22px;background:#f8f6fd;gap:12px;border-top:none;}
#addBankModal .btn-modal-save,#addBankModal .btn-modal-cancel{height:42px;padding:0 26px;border-radius:12px;font-size:13.5px;font-weight:700;border:none;justify-content:center;}
#addBankModal .btn-modal-save{order:-1;background:var(--primary);}
#addBankModal .btn-modal-save:hover{background:var(--primary-dark);}
#addBankModal .btn-modal-cancel{order:0;background:#ebebf2;color:var(--text);}
#addBankModal .btn-modal-cancel:hover{background:#dedeea;}
</style>
<style>
table.item-table{min-width:1860px;}
table.item-table thead th{font-size:11.5px;font-weight:600;padding:9px 6px;}
table.item-table tbody td{padding:6px;border-bottom:1px solid var(--line);border-right:1px solid var(--line);}
table.item-table tbody tr:nth-child(even) td{background:#fff;}
table.item-table tbody tr:hover td{background:#fbfaff;}
table.item-table input,table.item-table select{height:34px;border:1px solid var(--line);border-radius:8px;padding:0 8px;font-size:12px;}
table.item-table input:focus,table.item-table select:focus{border-color:var(--pu-m);outline:none;}
table.item-table td.readonly-cell{font-size:12px;font-weight:600;padding:6px 10px 6px 6px;}
table.item-table tfoot td{padding:8px 6px;font-size:12px;}
.col-sr{width:44px;}
.col-item{width:240px;}
.col-hsn,.col-sku{width:100px;}
.col-uom{width:104px;}
.col-qty{width:80px;}
.col-price{width:108px;}
.col-gst{width:72px;}
.col-discount1,.col-discount2{width:130px;}
.col-taxable,.col-total{width:112px;}
.col-tax{width:96px;}
.col-cess{width:84px;}
.col-action{width:44px;}
.mm-form .modal-box{max-width:560px;}
#addItemModal .modal-box,#addPartyModal .modal-box{max-width:780px;}
#addressFormModal .modal-box,#addressSelectModal .modal-box,#addTransporterModal .modal-box,#saleConfigModal .modal-box{max-width:640px;}
.mm-form .modal-box{max-height:90vh;}
.mm-form .field-group{height:auto;min-height:0;display:flex;flex-direction:column;align-items:stretch;}
.mm-form .field-group input:not([type=checkbox]):not([type=radio]),.mm-form .field-group select,.mm-form .field-group textarea{flex:none;}
.mm-form .modal-foot .btn-modal-cancel{order:-1;}
.mm-form .modal-foot .btn-modal-save,.mm-form .mm-save-first .btn-modal-save{order:0;}
.mm-form .modal-foot .addr-add-new{order:-3;}
.mm-form .mm-tp.on{display:block;}
.mm-form .form-grid.mm-tp.on{display:grid;}
#saleConfigModal .cfg-sec{font-size:12px;font-weight:700;color:var(--teal-d);text-transform:uppercase;letter-spacing:.4px;margin:14px 0 8px;display:flex;align-items:center;gap:8px;}
#saleConfigModal .cfg-sec:first-child{margin-top:0;}
#saleConfigModal .cfg-sec:after{content:"";flex:1;height:1px;background:var(--line);}
#saleConfigModal .cfg-list{display:grid;grid-template-columns:1fr 1fr;gap:8px;}
#saleConfigModal .sw{display:flex;align-items:center;justify-content:space-between;gap:10px;background:var(--pu-xl);border-radius:10px;padding:8px 12px;font-weight:600;font-size:12.5px;color:var(--text);}
#saleConfigModal .tg{position:relative;width:38px;height:21px;flex-shrink:0;display:inline-block;}
#saleConfigModal .tg input{opacity:0;width:0;height:0;position:absolute;}
#saleConfigModal .tg i{position:absolute;inset:0;background:#cfd2e2;border-radius:21px;transition:.2s;cursor:pointer;}
#saleConfigModal .tg i:before{content:"";position:absolute;width:15px;height:15px;left:3px;top:3px;background:#fff;border-radius:50%;transition:.2s;}
#saleConfigModal .tg input:checked+i{background:var(--gr);}
#saleConfigModal .tg input:checked+i:before{transform:translateX(17px);}
#saleConfigModal .fgrid{display:grid;grid-template-columns:1fr 1fr;gap:10px 12px;}
#saleConfigModal .fld{display:flex;flex-direction:column;gap:4px;min-width:0;}
#saleConfigModal .fld label{font-size:11.5px;font-weight:600;color:var(--pu-d);}
#saleConfigModal .fld select{width:100%;height:38px;border:1px solid var(--line);border-radius:10px;padding:0 30px 0 12px;background:#fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%235b2fa8'/%3E%3C/svg%3E") no-repeat right 12px center;appearance:none;-webkit-appearance:none;font-family:inherit;font-size:12.5px;color:var(--text);outline:none;}
#saleConfigModal .fld select:focus{border-color:var(--pu-m);box-shadow:0 0 0 3px rgba(91,47,168,.1);}
@media(max-width:560px){#saleConfigModal .cfg-list,#saleConfigModal .fgrid{grid-template-columns:1fr;}}
.mm-form .field-group{flex-wrap:nowrap;}
.mm-form .field-group>label{flex:none;}
</style>
<style>
/* ---- item table: compact aligned cells ---- */
table.item-table tbody td{vertical-align:middle;}
table.item-table input,table.item-table select{background:#fff;box-sizing:border-box;width:100%;height:34px;border:1px solid #dcd9ea;border-radius:8px;font-size:12px;appearance:none;-webkit-appearance:none;}
table.item-table select{padding-right:22px;background:#fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M1 1l4 4 4-4' fill='none' stroke='%236b6880' stroke-width='1.5'/%3E%3C/svg%3E") no-repeat right 8px center;}
table.item-table input[readonly]{background:#fff;}
table.item-table .item-search-wrap{display:flex !important;align-items:center;gap:6px;}
table.item-table .item-search-wrap .js-item-search{flex:1;min-width:0;padding-right:8px !important;}
table.item-table .item-search-wrap .js-price-history-btn,table.item-table .item-search-wrap .js-add-item{position:static !important;width:34px !important;height:34px;flex:0 0 34px;display:inline-flex;align-items:center;justify-content:center;border-radius:8px !important;padding:0;cursor:pointer;}
table.item-table .item-search-wrap .js-price-history-btn{background:#fff !important;border:1px solid var(--pu-m,#8b7fd0) !important;color:var(--pu,#5b4bc4);}
table.item-table .item-search-wrap .js-add-item{border:none !important;background:#0f9d58 !important;color:#fff;}
table.item-table .item-name-desc{margin-top:6px;}
table.item-table .item-name-desc input{height:32px;}
table.item-table tfoot .add-line-btn{display:inline-flex;align-items:center;gap:6px;height:34px;padding:0 14px;border:1px solid #dcd9ea;border-radius:8px;background:#fff;color:var(--pu-d);font-size:12.5px;font-weight:600;cursor:pointer;}
/* ---- item card header ---- */
@media(max-width:768px){
  #saleForm .item-table-card .card-h{flex-wrap:wrap;row-gap:10px;}
  #saleForm .item-table-card .card-h h3{flex:1;min-width:0;}
  #saleForm .item-table-card .ch-act{display:contents;}
  #saleForm .item-table-card #scanBarcodeBtn{order:2;margin-left:auto;}
  #saleForm .item-table-card .seg{order:3;flex:0 0 100%;display:flex;}
  #saleForm .item-table-card .seg label{flex:1;}
  #saleForm .item-table-card .seg span{text-align:center;padding:7px 6px;}
  #saleForm .item-table-card .pm{order:4;flex:0 0 100%;}
  #saleForm .item-table-card .pm select{flex:1;max-width:200px;}
  #saleForm .item-table-card .item-table-wrap{overflow-x:auto;-webkit-overflow-scrolling:touch;}
  table.item-table .col-sr{width:56px;}
  table.item-table .col-item{width:260px;}
}

/* ---- item card: match reference (round 2) ---- */
table.item-table tfoot .add-line-btn{background:#0f9d58;border:none;color:#fff;height:32px;padding:0 12px;font-size:12px;font-weight:700;}
table.item-table tfoot .add-line-btn:hover{background:#0b7f46;}
@media(max-width:768px){
  #saleForm .item-table-card .card-h{row-gap:8px;}
  #saleForm .item-table-card .seg{order:3;flex:0 0 auto;display:inline-flex;margin-right:auto;}
  #saleForm .item-table-card .seg label{flex:0 0 auto;}
  #saleForm .item-table-card .seg span{padding:5px 10px;font-size:11.5px;}
  #saleForm .item-table-card .pm{order:4;flex:0 0 100%;font-size:11.5px;}
  #saleForm .item-table-card .pm select{flex:0 0 auto;max-width:none;height:30px;font-size:12px;padding:0 24px 0 8px;appearance:none;-webkit-appearance:none;background:#fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M1 1l4 4 4-4' fill='none' stroke='%23333' stroke-width='1.5'/%3E%3C/svg%3E") no-repeat right 8px center;}
  #saleForm .item-table-card #scanBarcodeBtn{padding:0 10px;height:30px;font-size:12px;}
  table.item-table{min-width:0;}
  table.item-table .col-sr{width:38px;min-width:38px;padding-left:2px;padding-right:2px;}
  table.item-table .col-item{width:248px;min-width:248px;}
  table.item-table tbody td{padding:6px 4px;}
  table.item-table thead th{padding:9px 4px;}
  table.item-table .item-search-wrap{gap:5px;}
  table.item-table .item-search-wrap .js-price-history-btn,table.item-table .item-search-wrap .js-add-item{width:30px !important;flex-basis:30px;height:30px;}
  table.item-table .item-search-wrap .js-item-search{height:30px;}
}

</style>
<style>
#saleForm .item-table-card .pm{border:none !important;background:transparent !important;padding:0 !important;height:auto !important;box-shadow:none !important;}
</style>
<style>
/* ---- garments reskin sync ---- */
:root{--pu:#5b2fa8;--pu-d:#46218a;--pu-m:#8a63d2;--pu-l:#f2ecfc;--pu-xl:#f8f5fe;--teal:#0f857f;--teal-d:#0a6b66;--teal-l:#e4f5f3;--gr:#1fb36b;--gr-d:#13935a;--gr-l:#e8f8f0;--gr-b:#bfe8d3;--line:#e6e8f2;--r:14px;--sh:0 4px 18px rgba(80,60,160,.07);}
body{font-family:'Poppins','Segoe UI',Roboto,Arial,sans-serif;font-size:13px;background:linear-gradient(180deg,#e3f6f4 0,#f3f7fb 280px) fixed,#f3f7fb;}
.content{padding:10px 14px 90px;max-width:100%;overflow-x:hidden;}
.tab-tools{display:flex;justify-content:flex-end;align-items:center;gap:8px;margin-bottom:8px;flex-wrap:wrap;}
.tab-tools .round-btn{width:38px;height:38px;border-radius:50%;border:1px solid var(--line);background:#fff;color:var(--pu);display:flex;align-items:center;justify-content:center;box-shadow:var(--sh);font-size:13px;}
.tab-tools .round-btn:hover{background:var(--pu-l);}
#saleForm .grid{display:grid;gap:12px;margin-bottom:12px;}
#saleForm .g-top{grid-template-columns:1.25fr 1fr;align-items:stretch;}
#saleForm .g-party{grid-template-columns:1fr 1fr 1fr;align-items:stretch;}
#saleForm .g-bottom{grid-template-columns:1.15fr 1fr;align-items:stretch;}
#saleForm .stack{display:flex;flex-direction:column;gap:12px;min-width:0;}
#saleForm .stack>.grow{flex:1;}
#saleForm .card{background:#fff;border-radius:var(--r);box-shadow:var(--sh);padding:12px 14px;min-width:0;}
#saleForm .card-h{display:flex;align-items:center;gap:10px;margin-bottom:10px;}
#saleForm .card-h .ci{width:30px;height:30px;border-radius:50%;background:var(--pu-l);color:var(--pu);display:flex;align-items:center;justify-content:center;font-size:13px;flex-shrink:0;}
#saleForm .card-h .ci.t{background:var(--teal-l);color:var(--teal);}
#saleForm .card-h .ci.g{background:var(--gr-l);color:var(--gr-d);}
#saleForm .card-h h3{font-size:14px;font-weight:700;color:var(--pu-d);flex:1;}
#saleForm .card-h .ch-act{display:flex;gap:6px;align-items:center;flex-wrap:wrap;}
#saleForm .ac{background:#fff;border:1px solid #d3e5e0;border-radius:16px;padding:14px 18px 12px;min-width:0;box-shadow:var(--sh);}
#saleForm .ac-h{display:flex;align-items:center;gap:14px;padding-bottom:12px;border-bottom:1px solid #cfe3de;margin-bottom:10px;flex-wrap:wrap;}
#saleForm .ac-ic{width:46px;height:46px;border-radius:14px;background:#eaf6f0;color:#14803c;display:flex;align-items:center;justify-content:center;font-size:19px;flex-shrink:0;}
#saleForm .ac-h h3{font-size:16px;font-weight:600;color:#1d2b25;flex:1;min-width:120px;}
#saleForm .ac-acts{display:flex;gap:6px;align-items:center;flex-wrap:wrap;}
#saleForm .ib{width:34px;height:34px;border-radius:10px;border:1px solid #cfe3de;background:#fff;color:#14803c;display:flex;align-items:center;justify-content:center;font-size:14px;}
#saleForm .ib:hover{background:#eaf6f0;}
#saleForm .ib.add{background:#14803c;color:#fff;border-color:#14803c;}
#saleForm .ib.add:hover{background:#0f6a31;}
#saleForm .same-chk{display:flex;align-items:center;gap:6px;font-size:12px;font-weight:600;color:#1d2b25;cursor:pointer;white-space:nowrap;}
#saleForm .same-chk input{width:15px;height:15px;accent-color:#14803c;}
#saleForm .ac-blk{padding:2px 0;}
#saleForm .ac-blk+.ac-blk{margin-top:8px;padding-top:8px;border-top:1px dashed #cfe3de;}
#saleForm .ac-line{display:flex;gap:12px;align-items:flex-start;padding:5px 0;font-size:14px;color:#222;overflow-wrap:anywhere;line-height:1.45;}
#saleForm .ac-line:before{content:"";width:9px;height:9px;border-radius:50%;background:#12803b;box-shadow:0 0 0 3px #e3f4ea;margin-top:7px;flex-shrink:0;}
#saleForm .ac-line.b{font-weight:700;color:#111;}
#saleForm .ac-empty{border:1.5px dashed #bfe0d2;background:#fbfefc;border-radius:12px;padding:16px;text-align:center;color:var(--muted);font-size:12.5px;}
#saleForm .ac-empty i{display:block;font-size:24px;color:var(--gr);margin-bottom:4px;}
#saleForm .ac-sub{font-size:11.5px;color:var(--muted);margin-top:8px;font-weight:500;}
#saleForm .fgrid{display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:10px 12px;}
.bank-body .fgrid{display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:10px 12px;}
#saleForm .fgrid.c2{grid-template-columns:1fr 1fr;}
.bank-body .fgrid.c2{grid-template-columns:1fr 1fr;}
#saleForm .fgrid.c3{grid-template-columns:repeat(3,1fr);}
.bank-body .fgrid.c3{grid-template-columns:repeat(3,1fr);}
#saleForm .fld{display:flex;flex-direction:column;gap:4px;min-width:0;position:relative;}
.bank-body .fld{display:flex;flex-direction:column;gap:4px;min-width:0;position:relative;}
#saleForm .fld>label{font-size:11.5px;font-weight:600;color:var(--pu-d);}
.bank-body .fld>label{font-size:11.5px;font-weight:600;color:var(--pu-d);}
#saleForm .fld>label .req{color:var(--red);}
.bank-body .fld>label .req{color:var(--red);}
#saleForm .fld input,#saleForm .fld select,#saleForm .fld textarea{width:100%;height:38px;border:1px solid var(--line);border-radius:10px;padding:0 12px;background:#fff;outline:none;transition:border .15s,box-shadow .15s;}
.bank-body .fld input,.bank-body .fld select,.bank-body .fld textarea{width:100%;height:38px;border:1px solid var(--line);border-radius:10px;padding:0 12px;background:#fff;outline:none;transition:border .15s,box-shadow .15s;}
#saleForm .fld input[type=checkbox],#saleForm .fld input[type=radio]{width:auto;height:auto;}
.bank-body .fld input[type=checkbox],.bank-body .fld input[type=radio]{width:auto;height:auto;}
#saleForm .fld textarea{height:auto;min-height:64px;padding:9px 12px;resize:vertical;}
.bank-body .fld textarea{height:auto;min-height:64px;padding:9px 12px;resize:vertical;}
#saleForm .fld input:focus,#saleForm .fld select:focus,#saleForm .fld textarea:focus{border-color:var(--pu-m);box-shadow:0 0 0 3px rgba(91,47,168,.1);}
.bank-body .fld input:focus,.bank-body .fld select:focus,.bank-body .fld textarea:focus{border-color:var(--pu-m);box-shadow:0 0 0 3px rgba(91,47,168,.1);}
#saleForm .fld input[readonly]{background:var(--pu-xl);}
.bank-body .fld input[readonly]{background:var(--pu-xl);}
#saleForm .fld input.bal-dr{color:var(--gr-d);font-weight:700;}
.bank-body .fld input.bal-dr{color:var(--gr-d);font-weight:700;}
#saleForm .fld input.bal-cr{color:var(--red);font-weight:700;}
.bank-body .fld input.bal-cr{color:var(--red);font-weight:700;}
#saleForm .fld select{appearance:none;-webkit-appearance:none;padding-right:30px;background:#fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%235b2fa8'/%3E%3C/svg%3E") no-repeat right 12px center;cursor:pointer;}
.bank-body .fld select{appearance:none;-webkit-appearance:none;padding-right:30px;background:#fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%235b2fa8'/%3E%3C/svg%3E") no-repeat right 12px center;cursor:pointer;}
#saleForm .fld .with-btn{display:flex;gap:6px;}
.bank-body .fld .with-btn{display:flex;gap:6px;}
#saleForm .fld .with-btn>input,#saleForm .fld .with-btn>select{flex:1;min-width:0;}
.bank-body .fld .with-btn>input,.bank-body .fld .with-btn>select{flex:1;min-width:0;}
#saleForm .fld .prefix{display:flex;align-items:center;border:1px solid var(--line);border-radius:10px;background:#fff;overflow:hidden;}
.bank-body .fld .prefix{display:flex;align-items:center;border:1px solid var(--line);border-radius:10px;background:#fff;overflow:hidden;}
#saleForm .fld .prefix select{flex:0 1 auto;width:auto;max-width:62%;height:36px;border:none;border-right:1px solid var(--line);border-radius:0;box-shadow:none;padding:0 26px 0 12px;font-weight:700;color:var(--pu);background-position:right 9px center;text-overflow:ellipsis;}
.bank-body .fld .prefix select{flex:0 1 auto;width:auto;max-width:62%;height:36px;border:none;border-right:1px solid var(--line);border-radius:0;box-shadow:none;padding:0 26px 0 12px;font-weight:700;color:var(--pu);background-position:right 9px center;text-overflow:ellipsis;}
#saleForm .fld .prefix input{flex:1;min-width:0;width:auto;border:none;box-shadow:none !important;padding-left:10px;}
.bank-body .fld .prefix input{flex:1;min-width:0;width:auto;border:none;box-shadow:none !important;padding-left:10px;}
#saleForm .fld .unit{display:flex;gap:6px;}
.bank-body .fld .unit{display:flex;gap:6px;}
#saleForm .fld .unit select{width:104px;flex-shrink:0;}
.bank-body .fld .unit select{width:104px;flex-shrink:0;}
#saleForm .fld.sel-ro input{background:var(--pu-xl);font-weight:600;color:var(--pu-d);}
.bank-body .fld.sel-ro input{background:var(--pu-xl);font-weight:600;color:var(--pu-d);}
#saleForm .fld .hsn-link{position:absolute;right:2px;top:0;font-size:10.5px;font-weight:700;color:var(--pu);cursor:pointer;display:flex;gap:4px;align-items:center;}
.bank-body .fld .hsn-link{position:absolute;right:2px;top:0;font-size:10.5px;font-weight:700;color:var(--pu);cursor:pointer;display:flex;gap:4px;align-items:center;}
#saleForm .btn{border:none;border-radius:10px;height:38px;padding:0 18px;font-weight:600;font-size:13px;display:inline-flex;align-items:center;justify-content:center;gap:8px;white-space:nowrap;transition:all .15s;}
#saleForm .btn-p{background:var(--pu);color:#fff;}
#saleForm .btn-p:hover{background:var(--pu-d);}
#saleForm .btn-o{background:#fff;color:var(--pu);border:1.5px solid #c9b8ea;}
#saleForm .btn-o:hover{background:var(--pu-l);border-color:var(--pu-m);}
#saleForm .btn-g{background:linear-gradient(90deg,#2cc47a,#0f857f);color:#fff;}
#saleForm .btn-g:hover{filter:brightness(.95);}
#saleForm .btn-gl{background:#fff;color:var(--gr-d);border:1.5px solid var(--gr);}
#saleForm .btn-gl:hover{background:var(--gr-l);}
#saleForm .btn-sm{height:30px;padding:0 12px;font-size:12px;border-radius:8px;}
#saleForm .btn-ic{width:38px;padding:0;flex-shrink:0;}
#saleForm .btn-add{background:var(--gr);color:#fff;}
#saleForm .btn-add:hover{background:var(--gr-d);}
#saleForm .btn-del{background:#fdecec;color:var(--red);}
#saleForm .btn-del:hover{background:#fbd5d5;}
#saleForm .seg{display:inline-flex;background:var(--pu-xl);border:1px solid var(--line);border-radius:10px;padding:3px;gap:2px;}
#saleForm .seg label{cursor:pointer;}
#saleForm .seg input{display:none;}
#saleForm .seg span{display:block;padding:5px 12px;border-radius:8px;font-size:12px;font-weight:600;color:var(--muted);}
#saleForm .seg input:checked+span{background:var(--pu);color:#fff;}
#saleForm .pm{display:flex;align-items:center;gap:6px;font-size:12px;font-weight:600;color:var(--pu-d);}
#saleForm .pm select{height:32px;border:1px solid var(--line);border-radius:8px;padding:0 8px;background:#fff;font-weight:600;}
#saleForm .upload{border:2px dashed #b9a3e3;background:var(--pu-xl);border-radius:12px;padding:14px;text-align:center;cursor:pointer;position:relative;transition:background .15s;}
#saleForm .upload:hover,#saleForm .upload.drag{background:var(--pu-l);}
#saleForm .upload i{font-size:26px;color:var(--pu);}
#saleForm .upload b{display:block;color:var(--pu-d);font-size:12.5px;margin-top:2px;}
#saleForm .upload small{color:var(--muted);font-size:11px;}
#saleForm .upload input{position:absolute;inset:0;opacity:0;cursor:pointer;}
#saleForm .chips{display:flex;flex-wrap:wrap;gap:6px;margin-top:8px;}
#saleForm .fchip{display:flex;align-items:center;gap:6px;background:#fff;border:1px solid var(--line);border-radius:8px;padding:4px 8px;font-size:11.5px;}
#saleForm .fchip span{max-width:150px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
#saleForm .fchip button{border:none;background:none;color:var(--red);}
#saleForm .crow{display:grid;grid-template-columns:minmax(140px,2fr) 36px 52px minmax(60px,.8fr) minmax(80px,1fr) minmax(70px,.9fr) 74px 34px;gap:6px;align-items:center;margin-bottom:6px;min-width:640px;}
#saleForm .crow.al{grid-template-columns:minmax(140px,2fr) 36px 84px minmax(90px,1fr) auto auto 74px 34px;}
#saleForm .crow input,#saleForm .crow select{height:34px;border:1px solid var(--line);border-radius:8px;padding:0 8px;width:100%;font-size:12px;}
#saleForm .crow .tot{text-align:right;font-weight:700;color:var(--pu-d);}
#saleForm .crow label{display:flex;align-items:center;gap:4px;font-size:11px;font-weight:600;white-space:nowrap;}
#saleForm .crow label input{width:14px;height:14px;accent-color:var(--pu);}
#saleForm .hscroll{overflow-x:auto;}
#saleForm .sub-h{font-size:12.5px;font-weight:700;color:var(--pu-d);margin:12px 0 8px;display:flex;align-items:center;gap:8px;}
#saleForm .sub-h i{color:var(--pu);}
#saleForm .sum-card{padding:0;overflow:hidden;}
#saleForm .sum-head{background:linear-gradient(90deg,var(--pu) 0,#8f6bd6 70%,#cdbbf0 100%);color:#fff;padding:11px 16px;display:flex;align-items:center;gap:10px;font-weight:700;font-size:14px;}
#saleForm .sum-body{padding:10px 16px 14px;}
#saleForm .srow{display:flex;justify-content:space-between;align-items:center;padding:4px 0;font-size:12.5px;font-weight:600;gap:8px;}
#saleForm .srow span:last-child{font-variant-numeric:tabular-nums;}
#saleForm .srow input{width:96px;height:30px;border:1px solid var(--line);border-radius:8px;text-align:right;padding:0 8px;}
#saleForm .srow .dual{display:flex;gap:6px;}
#saleForm .srow .dual input.pct{width:58px;}
#saleForm .srow .dual input.amt{width:92px;background:var(--pu-xl);}
#saleForm .auto{font-size:10px;font-weight:700;color:var(--pu);background:var(--pu-l);border:none;border-radius:8px;padding:2px 8px;margin-left:6px;}
#saleForm .grand{display:flex;justify-content:space-between;align-items:center;background:var(--pu-l);border-radius:12px;padding:11px 14px;margin-top:8px;color:var(--pu);font-weight:700;font-size:16px;}
#saleForm .tw{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:10px;}
#saleForm .tw label{display:flex;align-items:center;gap:8px;background:var(--pu-xl);border:1px solid var(--line);border-radius:10px;padding:7px 12px;font-weight:600;font-size:12px;cursor:pointer;}
#saleForm .tw label:has(input:checked){background:var(--pu-l);border-color:var(--pu-m);color:var(--pu);}
#saleForm .tw input{accent-color:var(--pu);}
#saleForm .partb{background:var(--pu-xl);border:1px dashed var(--pu-m);border-radius:12px;padding:10px;margin-top:6px;display:none;}
#saleForm .partb.show{display:block;}
#saleForm .partb-h{text-align:center;color:var(--pu);font-weight:700;font-size:12px;margin-bottom:8px;letter-spacing:.4px;}
#saleForm .pay-card{margin-bottom:12px;}
#saleForm .pay-toggle{width:100%;background:none;border:none;text-align:left;margin-bottom:0;padding:0;color:inherit;}
#saleForm .pay-sum{font-size:13px;font-weight:700;color:var(--pu);margin-right:6px;white-space:nowrap;}
#saleForm .pay-chev{color:var(--pu);font-size:12px;transition:transform .2s ease;}
#saleForm .pay-card.open .pay-chev{transform:rotate(180deg);}
#saleForm .pay-body{margin-top:12px;}
#saleForm .bar{position:fixed;left:236px;right:0;bottom:0;background:#fff;box-shadow:0 -4px 18px rgba(80,60,160,.1);padding:10px 18px;display:grid;grid-template-columns:1fr 1fr 1.3fr .9fr;gap:12px;z-index:800;transition:left .25s;}
#saleForm .bar.collapsed{left:64px;}
#saleForm .bar .btn{height:40px;width:100%;}
#saleForm .ib{padding:0;font-weight:400;}
#saleForm .ac .ib i{margin:0;}
#saleForm .ac-empty{margin:0;}
#saleForm .card.item-table-card{padding-bottom:12px;}
#saleForm .item-table-wrap{border:1px solid var(--line);border-radius:10px;}
table.item-table thead th{background:var(--teal);color:#fff;font-weight:600;border-right:1px solid rgba(255,255,255,.15);}
table.item-table tfoot td{background:var(--teal-l);color:var(--teal-d);border-top:2px solid var(--teal);}
table.item-table tbody tr:hover td{background:#f4fbfa;}
table.item-table input,table.item-table select{border:1px solid var(--line);border-radius:8px;}
table.item-table input:focus,table.item-table select:focus{border-color:var(--pu-m);outline:none;}
table.item-table .add-line-btn{background:var(--gr);color:#fff;border:none;border-radius:8px;}
#saleForm .charge-row{gap:6px;margin-bottom:6px;min-width:700px;}
#saleForm .charge-row select,#saleForm .charge-row input:not([type=checkbox]){height:34px;border:1px solid var(--line);border-radius:8px;padding:0 8px;font-size:12px;}
#saleForm .icon-add-inline{background:var(--gr);color:#fff;border-radius:8px;width:36px;height:34px;border:none;}
#saleForm .icon-remove-inline{width:32px;height:32px;border-radius:8px;background:#fdecec;color:var(--red);border:none;}
#saleForm .charge-total{color:var(--pu-d);font-weight:700;}
#saleForm .charge-row label{display:flex;align-items:center;gap:4px;font-size:11px;font-weight:600;white-space:nowrap;}
#saleForm .upload-chip{display:flex;align-items:center;gap:6px;background:#fff;border:1px solid var(--line);border-radius:8px;padding:4px 8px;font-size:11.5px;}
#saleForm .upload-chip button{border:none;background:none;color:var(--red);}
#saleForm .tw label.same-chk{background:none;border:none;padding:0;}
#saleForm .fld.pbal input{background:var(--pu-xl);}
#saleForm .dc{display:contents;}
#saleForm .fld.readonly input{background:var(--pu-xl);}
#saleForm .g-party>.card:first-child .fld input,#saleForm .g-party>.card:first-child .fld select{font-family:inherit;font-size:12.5px;}
#saleForm input.bal-dr{color:var(--gr-d);font-weight:700;}
#saleForm input.bal-cr{color:var(--red);font-weight:700;}
#saleForm .sum-card .srow input{width:96px;height:30px;}
@media(max-width:1100px){#saleForm .g-top,#saleForm .g-party,#saleForm .g-bottom{grid-template-columns:1fr 1fr;}#saleForm .g-party>.card:first-child{grid-column:1/-1;}}
@media(max-width:768px){
  #saleForm .g-top,#saleForm .g-party,#saleForm .g-bottom,#saleForm .fgrid.c2,#saleForm .fgrid.c3{grid-template-columns:1fr;}
  #saleForm .bar,#saleForm .bar.collapsed{left:0;grid-template-columns:1fr 1fr;padding:10px 12px;}
  .content{padding:10px 10px 130px;}
  #saleForm .g-bottom{display:flex;flex-direction:column;}
  #saleForm .g-bottom>.stack{display:contents;}
  #saleForm .g-bottom>.stack>.grow{flex:none;}
  #saleForm #sumSec{order:1;}#saleForm #bankDetailsSection{order:2;}#saleForm #uploadDocumentSection{order:3;}#saleForm #chargesSec{order:4;}#saleForm #termsSection{order:5;}#saleForm #noteSection{order:6;}#saleForm #transportSec{order:7;}
}
.bank-box{max-width:645px;border-radius:20px;}
.bank-head{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:20px 22px 16px;border-bottom:1px solid var(--line);}
.bank-head h4{font-size:16px;font-weight:700;color:var(--primary);}
.bank-body{padding:18px 22px 22px;overflow-y:auto;flex:1;}
.bank-body .fgrid{gap:14px;}
.bank-body .fld{gap:6px;}
.bank-body .fld>label{font-size:12px;font-weight:700;color:var(--text);}
.bank-body .fld input,.bank-body .fld select{height:42px;border-radius:12px;font-size:13px;}
.bank-body .fld input::placeholder{color:#9a9bb0;}
.bank-body .fld input:focus,.bank-body .fld select:focus{border-color:var(--primary);box-shadow:0 0 0 3px rgba(71,60,151,.14);}
.bank-foot{display:flex;align-items:center;justify-content:flex-end;gap:12px;padding:16px 22px;background:#f8f6fd;}
.btn-bs,.btn-bc{height:42px;padding:0 26px;border-radius:12px;font-size:13.5px;font-weight:700;border:none;}
.btn-bs{background:var(--primary);color:#fff;}
.btn-bs:hover{background:var(--primary-dark);}
.btn-bc{background:#ebebf2;color:var(--text);}
.btn-bc:hover{background:#dedeea;}
.tabs{display:flex;gap:4px;background:var(--pu-xl);border-radius:12px;padding:4px;margin-bottom:14px;overflow-x:auto;}
.tabs button{flex:1;border:none;background:transparent;padding:8px 12px;border-radius:9px;font-weight:600;font-size:12.5px;color:var(--muted);white-space:nowrap;}
.tabs button.on{background:#fff;color:var(--pu);box-shadow:0 2px 8px rgba(80,60,160,.12);}
.tp{display:none;}
.tp.on{display:block;}
.sw{display:flex;align-items:center;justify-content:space-between;gap:10px;background:var(--pu-xl);border-radius:10px;padding:8px 12px;font-weight:600;font-size:12.5px;}
.tg{position:relative;width:38px;height:21px;flex-shrink:0;display:inline-block;}
.tg input{opacity:0;width:0;height:0;position:absolute;}
.tg i{position:absolute;inset:0;background:#cfd2e2;border-radius:21px;transition:.2s;cursor:pointer;}
.tg i:before{content:"";position:absolute;width:15px;height:15px;left:3px;top:3px;background:#fff;border-radius:50%;transition:.2s;}
.tg input:checked+i{background:var(--gr);}
.tg input:checked+i:before{transform:translateX(17px);}
.mh-ic{width:38px;height:38px;border-radius:12px;background:var(--pu);color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0;}
.mh-ic.g{background:var(--gr);}
.mh-ic.t{background:var(--teal);}
.modal-head h4{font-size:15px;font-weight:700;color:var(--pu-d);line-height:1.2;}
.mh-sub{font-size:11.5px;color:var(--muted);}
.mh-txt{flex:1;min-width:0;}
.mh-acts{display:flex;align-items:center;gap:6px;}
.mh-btn{width:32px;height:32px;border:1px solid var(--line);border-radius:9px;background:#fff;color:var(--muted);font-size:13px;}
.mh-btn:hover,.mh-btn.active{color:var(--pu);border-color:var(--pu-m);}
.am-item{display:flex;gap:10px;align-items:flex-start;background:#fff;border:1.5px solid var(--line);border-radius:14px;padding:10px 12px;margin-bottom:8px;cursor:pointer;transition:all .15s;}
.am-item:hover{border-color:var(--gr);}
.am-item.sel{border-color:var(--gr);background:var(--gr-l);}
.am-item>input{margin-top:5px;width:16px;height:16px;accent-color:#14803c;flex-shrink:0;}
.am-body{flex:1;min-width:0;}
.am-body .ac-line{padding:2px 0;font-size:13px;}
.am-act{display:flex;gap:4px;}
.am-act button{width:30px;height:30px;border-radius:8px;background:#fff;color:var(--muted);border:1px solid var(--line);}
.am-act button:hover{color:var(--pu);border-color:var(--pu-m);}
.am-empty{text-align:center;padding:26px 10px;color:var(--muted);}
.am-empty i{font-size:34px;color:var(--gr-b);display:block;margin-bottom:8px;}
.mm-form .modal-overlay,.modal-overlay{background:rgba(30,20,60,.5);backdrop-filter:blur(3px);}
.mm-form .modal-head{background:linear-gradient(90deg,var(--pu-xl),#fff);border-bottom:1px solid var(--line);justify-content:flex-start;}
.mm-form .modal-head .mh-txt{flex:1;min-width:0;}
.mm-form .modal-head h5,.mm-form .modal-head h4{font-size:15px;font-weight:700;color:var(--pu-d);}
.mm-form .modal-head .modal-head-actions{margin-left:auto;}
.mm-form .modal-head>.modal-close{margin-left:auto;}
.mm-form .modal-close:hover{background:var(--pu-l);color:var(--pu);}
.mm-form .modal-foot{border-top:1px solid var(--line);background:#faf9fe;}
.mm-form .btn-modal-save,.mm-form .modal-foot .btn-primary{background:var(--pu);color:#fff;border:none;border-radius:10px;height:38px;padding:0 18px;font-weight:600;font-size:13px;}
.mm-form .btn-modal-save:hover,.mm-form .modal-foot .btn-primary:hover{background:var(--pu-d);}
.mm-form .btn-modal-cancel,.mm-form .modal-foot .btn-outline{background:#fff;color:var(--pu);border:1.5px solid #c9b8ea;border-radius:10px;height:38px;padding:0 18px;font-weight:600;font-size:13px;}
.mm-form .btn-modal-cancel:hover,.mm-form .modal-foot .btn-outline:hover{background:var(--pu-l);border-color:var(--pu-m);}
.mm-form .addr-add-new{margin-right:auto;background:#fff;color:var(--gr-d);border:1.5px solid var(--gr);border-radius:10px;height:38px;padding:0 14px;font-weight:600;font-size:13px;}
.mm-form .addr-add-new:hover{background:var(--gr-l);}
.mm-form .section-title{color:var(--pu);}
.mm-form .field-group{display:flex;flex-wrap:wrap;align-items:stretch;border:none;border-radius:0;padding:0;min-height:0;gap:4px 6px;background:transparent;}
.mm-form .field-group:focus-within{border:none;box-shadow:none;}
.mm-form .field-group>label:not(.toggle-switch){position:static;flex:0 0 100%;width:100%;max-width:100%;background:transparent;padding:0;font-size:11.5px;font-weight:600;color:var(--pu-d);}
.mm-form .field-group input:not([type=checkbox]):not([type=radio]),.mm-form .field-group select,.mm-form .field-group textarea{flex:1 1 0;min-width:0;width:auto;height:38px;border:1px solid var(--line);border-radius:10px;padding:0 12px;background-color:#fff;font-family:inherit;font-size:12.5px;color:var(--text);outline:none;}
.mm-form .field-group textarea{height:auto;min-height:64px;padding:9px 12px;}
.mm-form .field-group input:focus,.mm-form .field-group select:focus,.mm-form .field-group textarea:focus{border-color:var(--pu-m);box-shadow:0 0 0 3px rgba(91,47,168,.1);}
.mm-form .field-group select{padding-right:30px;background:#fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%235b2fa8'/%3E%3C/svg%3E") no-repeat right 12px center;}
.mm-form .field-group.with-icon,.mm-form .field-group.two-icons{padding-right:0;}
.mm-form .field-group .field-icon-btn{position:static;flex:0 0 38px;width:38px;height:38px;border:none;border-radius:10px;background:var(--gr);color:#fff;}
.mm-form .field-group .field-icon-btn:hover{background:var(--gr-d);}
.mm-form .field-group.two-icons .field-icon-btn.second{background:#fff;color:var(--pu);border:1.5px solid #c9b8ea;right:auto;}
.mm-form .itt-btn.active,.mm-form .item-type-toggle .active{background:var(--pu);color:#fff;}
.mm-form .addr-tabs,.mm-form .addr-tabs{display:flex;gap:4px;background:var(--pu-xl);border-radius:12px;padding:4px;margin-bottom:14px;}
.mm-form .addr-tab{flex:1;border:none;background:transparent;padding:8px 12px;border-radius:9px;font-weight:600;font-size:12.5px;color:var(--muted);}
.mm-form .addr-tab.active{background:#fff;color:var(--pu);box-shadow:0 2px 8px rgba(80,60,160,.12);}
.mm-form .addr-list{display:flex;flex-direction:column;gap:8px;max-height:320px;overflow-y:auto;}
.mm-form .addr-row{display:flex;gap:10px;align-items:flex-start;background:#fff;border:1.5px solid var(--line);border-radius:14px;padding:10px 12px;}
.mm-form .addr-row:hover{border-color:var(--gr);}
.mm-form .addr-row.selected{border-color:var(--gr);background:var(--gr-l);}
.mm-form .addr-row input{accent-color:#14803c;width:16px;height:16px;margin-top:4px;}
.mm-form .addr-title{font-size:13px;font-weight:700;color:#111;}
.mm-form .addr-gstin{background:var(--gr);}
.mm-form .addr-text{font-size:13px;color:#222;}
.mm-form .addr-actions{flex-direction:row;gap:4px;}
.mm-form .addr-actions button{width:30px;height:30px;border-radius:8px;background:#fff;color:var(--muted);border:1px solid var(--line);font-size:12px;}
.mm-form .addr-actions button:hover{color:var(--pu);border-color:var(--pu-m);}
.mm-form .tabs{margin-bottom:14px;}
.mm-form .toggle input:checked+span{background:var(--gr);}
</style>
<style>
.mm-form .modal-box.mm-w-620,#addItemModal .modal-box,#addPartyModal .modal-box{max-width:780px;}
.mm-form .mm-tabs{display:flex;gap:4px;background:var(--pu-xl);border-radius:12px;padding:4px;margin-bottom:14px;overflow-x:auto;}
.mm-form .mm-tabs button{flex:1;border:none;background:transparent;padding:8px 12px;border-radius:9px;font-family:inherit;font-weight:600;font-size:12.5px;color:var(--muted);white-space:nowrap;cursor:pointer;}
.mm-form .mm-tabs button.on{background:#fff;color:var(--pu);box-shadow:0 2px 8px rgba(80,60,160,.12);}
.mm-form .mm-tp{display:none;}
.mm-form .mm-tp.on{display:grid;}
.mm-form .mm-seg{display:inline-flex;align-self:flex-end;background:var(--pu-xl);border:1px solid var(--line);border-radius:10px;padding:3px;gap:2px;}
.mm-form .mm-seg label{cursor:pointer;}
.mm-form .mm-seg input{display:none;}
.mm-form .mm-seg span{display:block;padding:7px 14px;border-radius:8px;font-size:12px;font-weight:600;color:var(--muted);}
.mm-form .mm-seg input:checked+span{background:var(--pu);color:#fff;}
.mm-form .ob-row{align-items:flex-end;}
.mm-form .opening-stock-wrap,.mm-form #openingStockRows{grid-column:1/-1;display:grid;gap:10px;}
.mm-form .os-row{grid-template-columns:1fr 1fr;gap:10px 12px;background:var(--pu-xl);border:1px solid var(--line);border-radius:12px;padding:12px;}
.mm-form .os-row .os-remove{grid-column:1/-1;justify-self:end;width:auto;height:30px;padding:0 12px;border:none;border-radius:8px;background:#fdecec;color:var(--red);font-family:inherit;font-size:12px;font-weight:600;display:inline-flex;align-items:center;gap:6px;position:static;cursor:pointer;}
.mm-form .os-row .os-remove:hover{background:#fbd5d5;}
.mm-form .add-charge-btn{grid-column:1/-1;justify-self:start;height:30px;padding:0 12px;border-radius:8px;background:#fff;color:var(--gr-d);border:1.5px solid var(--gr);font-family:inherit;font-size:12px;font-weight:600;display:inline-flex;align-items:center;gap:8px;cursor:pointer;}
.mm-form .add-charge-btn:hover{background:var(--gr-l);}
.mm-form .os-label{text-transform:none;letter-spacing:0;}
.mm-form .os-field input[readonly]{background:var(--pu-xl);font-weight:400;color:var(--text);}
.mm-form .os-summary-row{grid-column:1/-1;background:var(--pu-l);border:1px dashed var(--pu-m);border-radius:12px;padding:10px;gap:10px 12px;}
#addBankModal .modal-head{background:#fff;padding:20px 22px 16px;}
#addBankModal .modal-head h4,#addBankModal .modal-head h5{font-size:16px;color:var(--primary);}
#addBankModal .modal-body{padding:18px 22px 22px;}
#addBankModal .field-group>label:not(.toggle-switch){font-size:12px;font-weight:700;color:var(--text);}
#addBankModal .field-group input:not([type=checkbox]):not([type=radio]),#addBankModal .field-group select{height:42px;border-radius:12px;font-size:13px;}
#addBankModal .modal-foot{padding:16px 22px;background:#f8f6fd;gap:12px;border-top:none;}
#addBankModal .btn-modal-save,#addBankModal .btn-modal-cancel{height:42px;padding:0 26px;border-radius:12px;font-size:13.5px;font-weight:700;border:none;justify-content:center;}
#addBankModal .btn-modal-save{order:-1;background:var(--primary);}
#addBankModal .btn-modal-save:hover{background:var(--primary-dark);}
#addBankModal .btn-modal-cancel{order:0;background:#ebebf2;color:var(--text);}
#addBankModal .btn-modal-cancel:hover{background:#dedeea;}
</style>
<style>
table.item-table{min-width:1860px;}
table.item-table thead th{font-size:11.5px;font-weight:600;padding:9px 6px;}
table.item-table tbody td{padding:6px;border-bottom:1px solid var(--line);border-right:1px solid var(--line);}
table.item-table tbody tr:nth-child(even) td{background:#fff;}
table.item-table tbody tr:hover td{background:#fbfaff;}
table.item-table input,table.item-table select{height:34px;border:1px solid var(--line);border-radius:8px;padding:0 8px;font-size:12px;}
table.item-table input:focus,table.item-table select:focus{border-color:var(--pu-m);outline:none;}
table.item-table td.readonly-cell{font-size:12px;font-weight:600;padding:6px 10px 6px 6px;}
table.item-table tfoot td{padding:8px 6px;font-size:12px;}
.col-sr{width:44px;}
.col-item{width:240px;}
.col-hsn,.col-sku{width:100px;}
.col-uom{width:104px;}
.col-qty{width:80px;}
.col-price{width:108px;}
.col-gst{width:72px;}
.col-discount1,.col-discount2{width:130px;}
.col-taxable,.col-total{width:112px;}
.col-tax{width:96px;}
.col-cess{width:84px;}
.col-action{width:44px;}
.mm-form .modal-box{max-width:560px;}
#addItemModal .modal-box,#addPartyModal .modal-box{max-width:780px;}
#addressFormModal .modal-box,#addressSelectModal .modal-box,#addTransporterModal .modal-box,#saleConfigModal .modal-box{max-width:640px;}
.mm-form .modal-box{max-height:90vh;}
.mm-form .field-group{height:auto;min-height:0;}
.mm-form .os-field{flex-direction:column;align-items:stretch;gap:4px;border:none;border-radius:0;padding:0;min-height:0;background:none;box-shadow:none;}
.mm-form .os-label{position:static;background:none;padding:0;font-size:11.5px;font-weight:600;color:var(--pu-d);text-transform:none;letter-spacing:0;}
.mm-form .os-field input{height:38px;border:1px solid var(--line);border-radius:10px;padding:0 12px;font-family:inherit;font-size:12.5px;background:#fff;}
.mm-form .os-field input[readonly]{background:var(--pu-xl);font-weight:400;color:var(--text);}
.mm-form .modal-foot .btn-modal-cancel{order:-1;}
.mm-form .modal-foot .btn-modal-save,.mm-form .mm-save-first .btn-modal-save{order:0;}
.mm-form .modal-foot .addr-add-new{order:-3;}
.mm-form .mm-tp.on{display:block;}
.mm-form .form-grid.mm-tp.on{display:grid;}
#saleConfigModal .cfg-sec{font-size:12px;font-weight:700;color:var(--teal-d);text-transform:uppercase;letter-spacing:.4px;margin:14px 0 8px;display:flex;align-items:center;gap:8px;}
#saleConfigModal .cfg-sec:first-child{margin-top:0;}
#saleConfigModal .cfg-sec:after{content:"";flex:1;height:1px;background:var(--line);}
#saleConfigModal .cfg-list{display:grid;grid-template-columns:1fr 1fr;gap:8px;}
#saleConfigModal .sw{display:flex;align-items:center;justify-content:space-between;gap:10px;background:var(--pu-xl);border-radius:10px;padding:8px 12px;font-weight:600;font-size:12.5px;color:var(--text);}
#saleConfigModal .tg{position:relative;width:38px;height:21px;flex-shrink:0;display:inline-block;}
#saleConfigModal .tg input{opacity:0;width:0;height:0;position:absolute;}
#saleConfigModal .tg i{position:absolute;inset:0;background:#cfd2e2;border-radius:21px;transition:.2s;cursor:pointer;}
#saleConfigModal .tg i:before{content:"";position:absolute;width:15px;height:15px;left:3px;top:3px;background:#fff;border-radius:50%;transition:.2s;}
#saleConfigModal .tg input:checked+i{background:var(--gr);}
#saleConfigModal .tg input:checked+i:before{transform:translateX(17px);}
#saleConfigModal .fgrid{display:grid;grid-template-columns:1fr 1fr;gap:10px 12px;}
#saleConfigModal .fld{display:flex;flex-direction:column;gap:4px;min-width:0;}
#saleConfigModal .fld label{font-size:11.5px;font-weight:600;color:var(--pu-d);}
#saleConfigModal .fld select{width:100%;height:38px;border:1px solid var(--line);border-radius:10px;padding:0 30px 0 12px;background:#fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%235b2fa8'/%3E%3C/svg%3E") no-repeat right 12px center;appearance:none;-webkit-appearance:none;font-family:inherit;font-size:12.5px;color:var(--text);outline:none;}
#saleConfigModal .fld select:focus{border-color:var(--pu-m);box-shadow:0 0 0 3px rgba(91,47,168,.1);}
@media(max-width:560px){#saleConfigModal .cfg-list,#saleConfigModal .fgrid{grid-template-columns:1fr;}}
.mm-form .itt-btn{height:34px;padding:0 22px;font-size:12.5px;font-weight:600;}
.mm-form .checkbox-row,.mm-form .checkbox-row label{font-size:12px;font-weight:600;color:var(--pu-d);}
.mm-form .checkbox-row input{accent-color:var(--pu);}
.mm-form{line-height:1.45;}
.mm-form .modal-box{box-shadow:0 24px 60px rgba(31,29,61,.28);}
.mm-form .modal-head{gap:12px;}
.mm-form .modal-head h5,.mm-form .modal-head h4{line-height:1.2;}
.mm-form .btn-modal-save,.mm-form .btn-modal-cancel{display:inline-flex;align-items:center;justify-content:center;gap:8px;}
.mm-form .mh-acts{display:flex;align-items:center;gap:6px;}
.mm-form .mh-fetch{background:var(--gr);color:#fff;border:none;border-radius:9px;padding:0 12px;height:32px;font-size:11.5px;font-weight:700;font-family:inherit;display:flex;align-items:center;gap:6px;white-space:nowrap;cursor:pointer;}
.mm-form .hscroll{overflow-x:auto;}
.mm-form .mh-ic.t{background:var(--teal);}
.mm-form .mh-sub{font-size:11.5px;color:var(--muted);}
.mm-form .modal-box.w7{max-width:780px;}
.mm-form .btn{border:none;border-radius:10px;height:38px;padding:0 18px;font-weight:600;font-size:13px;font-family:inherit;display:inline-flex;align-items:center;justify-content:center;gap:8px;white-space:nowrap;cursor:pointer;transition:all .15s;}
.mm-form .btn-p{background:var(--pu);color:#fff;}
.mm-form .btn-p:hover{background:var(--pu-d);}
.mm-form .btn-o{background:#fff;color:var(--pu);border:1.5px solid #c9b8ea;}
.mm-form .btn-o:hover{background:var(--pu-l);border-color:var(--pu-m);}
.mm-form .btn-sm{height:30px;padding:0 12px;font-size:12px;border-radius:8px;}
.mm-form .gsl{width:100%;border-collapse:collapse;min-width:560px;}
.mm-form .gsl th{background:var(--teal);color:#fff;padding:8px;font-size:11.5px;font-weight:600;text-align:center;}
.mm-form .gsl td{padding:7px;text-align:center;border-bottom:1px solid var(--line);font-size:12px;}
.mm-form .gsl input{width:80px;height:30px;border:1px solid var(--line);border-radius:8px;padding:0 6px;text-align:center;font-family:inherit;}
.mm-form .gsl.ph{min-width:860px;}
.mm-form .gsl.ph th select{display:block;margin:4px auto 0;height:24px;border:none;border-radius:6px;padding:0 4px;font-size:11px;font-weight:600;background:#fff;color:var(--teal-d);outline:none;}
.mm-form .pos{color:var(--gr-d);font-weight:700;}
.mm-form .neg{color:var(--red);font-weight:700;}
.mm-form .sw{display:flex;align-items:center;justify-content:space-between;gap:10px;background:var(--pu-xl);border-radius:10px;padding:8px 12px;font-weight:600;font-size:12.5px;}
.mm-form .ph-head-sw{padding:4px 6px 4px 12px;border:1px solid var(--line);background:#fff;font-size:12px;white-space:nowrap;}
.mm-form .tg{position:relative;width:38px;height:21px;flex-shrink:0;display:inline-block;}
.mm-form .tg input{opacity:0;width:0;height:0;position:absolute;}
.mm-form .tg i{position:absolute;inset:0;background:#cfd2e2;border-radius:21px;transition:.2s;cursor:pointer;}
.mm-form .tg i:before{content:"";position:absolute;width:15px;height:15px;left:3px;top:3px;background:#fff;border-radius:50%;transition:.2s;}
.mm-form .tg input:checked+i{background:var(--gr);}
.mm-form .tg input:checked+i:before{transform:translateX(17px);}
.mm-form .sw.f38{min-height:38px;background:#fff;border:1px solid var(--line);border-radius:10px;}
.mm-form .field-group>label.sp{visibility:hidden;}
.mm-form .hsn-search-link{position:absolute;right:2px;top:0;font-size:10.5px;font-weight:700;color:var(--pu);cursor:pointer;display:flex;gap:4px;align-items:center;}
.mm-form .settings-panel{top:54px;right:56px;width:270px;border:1px solid var(--line);border-radius:12px;}
.mm-form .settings-panel .sp-title{color:var(--pu);border-bottom:1px solid var(--line);}
.mm-form .sp-item{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:7px 12px;font-size:12px;color:var(--text);}
.mm-form .sp-item:hover{background:var(--pu-xl);}
.mm-form .field-group>.sw{width:100%;}
.mm-form .field-group input[readonly]:not([type=checkbox]):not([type=radio]){background:var(--pu-xl);}
.mm-form .btn-fetch-gstin-header{background:var(--gr);color:#fff;border:none;border-radius:9px;padding:0 12px;height:32px;font-size:11.5px;font-weight:700;font-family:inherit;display:flex;align-items:center;gap:6px;white-space:nowrap;cursor:pointer;}
.mm-form .btn-fetch-gstin-header:hover{background:var(--gr-d);}
#addLedgerModal .modal-close,#addTransporterModal .modal-close,#addUomModal .modal-close,#addCategoryModal .modal-close,#addCessRateModal .modal-close,#addPartyGroupModal .modal-close,#addBrokerModal .modal-close{display:none;}
.mm-form .modal-section-head{font-size:12px;font-weight:700;color:var(--teal-d);text-align:left;text-transform:uppercase;letter-spacing:.4px;margin:14px 0 8px;padding-top:0;border-top:none;display:flex;align-items:center;gap:8px;}
.mm-form .modal-section-head:after{content:"";flex:1;height:1px;background:var(--line);}
#addTransporterModal .modal-box{max-width:640px;}
#addTransporterModal .form-row{display:grid;grid-template-columns:1fr 1fr;gap:10px 12px;margin:0 0 10px;}
#addTransporterModal .form-col{width:auto;max-width:none;flex:none;min-width:0;}
#addTransporterModal .form-col:has(#newTransporterEmail){grid-column:1/-1;}
#saleForm .fld input,#saleForm .fld select,#saleForm .fld textarea{font-size:12.5px;}
#saleForm .prefix select{font-size:12.5px;font-weight:600;}
#saleForm .g-party>.card:first-child .fgrid{grid-template-columns:1fr 1fr;}
#saleForm .g-party>.card:first-child .fld:has(+ #cfgFieldMobileNumber[style*="none"]){grid-column:1/-1;}
@media(max-width:420px){#saleForm .g-party>.card:first-child .fld:has(#partyGstin),#saleForm .g-party>.card:first-child #cfgFieldMobileNumber{grid-column:1/-1;}}

/* ---- item table: compact aligned cells ---- */
table.item-table tbody td{vertical-align:middle;}
table.item-table input,table.item-table select{background:#fff;box-sizing:border-box;width:100%;height:34px;border:1px solid #dcd9ea;border-radius:8px;font-size:12px;appearance:none;-webkit-appearance:none;}
table.item-table select{padding-right:22px;background:#fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M1 1l4 4 4-4' fill='none' stroke='%236b6880' stroke-width='1.5'/%3E%3C/svg%3E") no-repeat right 8px center;}
table.item-table input[readonly]{background:#fff;}
table.item-table .item-search-wrap{display:flex !important;align-items:center;gap:6px;}
table.item-table .item-search-wrap .js-item-search{flex:1;min-width:0;padding-right:8px !important;}
table.item-table .item-search-wrap .js-price-history-btn,table.item-table .item-search-wrap .js-add-item{position:static !important;width:34px !important;height:34px;flex:0 0 34px;display:inline-flex;align-items:center;justify-content:center;border-radius:8px !important;padding:0;cursor:pointer;}
table.item-table .item-search-wrap .js-price-history-btn{background:#fff !important;border:1px solid var(--pu-m,#8b7fd0) !important;color:var(--pu,#5b4bc4);}
table.item-table .item-search-wrap .js-add-item{border:none !important;background:#0f9d58 !important;color:#fff;}
table.item-table .item-name-desc{margin-top:6px;}
table.item-table .item-name-desc input{height:32px;}
table.item-table tfoot .add-line-btn{display:inline-flex;align-items:center;gap:6px;height:34px;padding:0 14px;border:1px solid #dcd9ea;border-radius:8px;background:#fff;color:var(--pu-d);font-size:12.5px;font-weight:600;cursor:pointer;}
/* ---- item card header ---- */
@media(max-width:768px){
  #saleForm .item-table-card .card-h{flex-wrap:wrap;row-gap:10px;}
  #saleForm .item-table-card .card-h h3{flex:1;min-width:0;}
  #saleForm .item-table-card .ch-act{display:contents;}
  #saleForm .item-table-card #scanBarcodeBtn{order:2;margin-left:auto;}
  #saleForm .item-table-card .seg{order:3;flex:0 0 100%;display:flex;}
  #saleForm .item-table-card .seg label{flex:1;}
  #saleForm .item-table-card .seg span{text-align:center;padding:7px 6px;}
  #saleForm .item-table-card .pm{order:4;flex:0 0 100%;}
  #saleForm .item-table-card .pm select{flex:1;max-width:200px;}
  #saleForm .item-table-card .item-table-wrap{overflow-x:auto;-webkit-overflow-scrolling:touch;}
  table.item-table .col-sr{width:56px;}
  table.item-table .col-item{width:260px;}
}

/* ---- item card: match reference (round 2) ---- */
table.item-table tfoot .add-line-btn{background:#0f9d58;border:none;color:#fff;height:32px;padding:0 12px;font-size:12px;font-weight:700;}
table.item-table tfoot .add-line-btn:hover{background:#0b7f46;}
@media(max-width:768px){
  #saleForm .item-table-card .card-h{row-gap:8px;}
  #saleForm .item-table-card .seg{order:3;flex:0 0 auto;display:inline-flex;margin-right:auto;}
  #saleForm .item-table-card .seg label{flex:0 0 auto;}
  #saleForm .item-table-card .seg span{padding:5px 10px;font-size:11.5px;}
  #saleForm .item-table-card .pm{order:4;flex:0 0 100%;font-size:11.5px;}
  #saleForm .item-table-card .pm select{flex:0 0 auto;max-width:none;height:30px;font-size:12px;padding:0 24px 0 8px;appearance:none;-webkit-appearance:none;background:#fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M1 1l4 4 4-4' fill='none' stroke='%23333' stroke-width='1.5'/%3E%3C/svg%3E") no-repeat right 8px center;}
  #saleForm .item-table-card #scanBarcodeBtn{padding:0 10px;height:30px;font-size:12px;}
  table.item-table{min-width:0;}
  table.item-table .col-sr{width:38px;min-width:38px;padding-left:2px;padding-right:2px;}
  table.item-table .col-item{width:248px;min-width:248px;}
  table.item-table tbody td{padding:6px 4px;}
  table.item-table thead th{padding:9px 4px;}
  table.item-table .item-search-wrap{gap:5px;}
  table.item-table .item-search-wrap .js-price-history-btn,table.item-table .item-search-wrap .js-add-item{width:30px !important;flex-basis:30px;height:30px;}
  table.item-table .item-search-wrap .js-item-search{height:30px;}
}
</style>
<style>
/* ===== HISAB UI FIXES v3 ===== */
/* ---------- F1: Add Item modal (sales_create layout) ---------- */
#addItemModal .itm-box{max-width:640px;}
#addItemModal .modal-head{position:relative;}
#addItemModal .mh-acts{display:flex;align-items:center;gap:6px;}
#addItemModal .mh-btn{width:32px;height:32px;border:1px solid var(--line);border-radius:9px;background:#fff;color:var(--muted);font-size:13px;cursor:pointer;}
#addItemModal .mh-btn:hover,#addItemModal .mh-btn.active{color:var(--pu);border-color:var(--pu-m);}
#addItemModal .settings-panel{display:none;position:absolute;top:52px;right:14px;width:250px;max-height:330px;overflow-y:auto;background:#fff;border:1px solid var(--line);border-radius:12px;box-shadow:0 12px 32px rgba(31,29,61,.18);z-index:30;padding:4px 0;}
#addItemModal .settings-panel.show{display:block;}
#addItemModal .settings-panel .sp-title{font-size:10.5px;font-weight:700;color:var(--pu);text-transform:uppercase;letter-spacing:.3px;padding:8px 12px;border-bottom:1px solid var(--line);}
#addItemModal .settings-panel .sp-item{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:7px 12px;font-size:12px;color:var(--text);}
#addItemModal .settings-panel .sp-item:hover{background:var(--pu-xl);}
#addItemModal .modal-body{padding:0 18px 14px;overflow-y:auto;}
#addItemModal .sec-t{font-size:11.5px;font-weight:700;color:var(--pu-d);text-transform:uppercase;letter-spacing:.3px;padding-bottom:7px;margin:18px 0 12px;border-bottom:1px solid var(--line);}
#addItemModal .fgrid{display:grid;grid-template-columns:1fr 1fr;gap:12px 14px;}
#addItemModal .fld{display:flex;flex-direction:column;gap:5px;min-width:0;position:relative;}
#addItemModal .fld>label{font-size:12px;font-weight:600;color:var(--pu-d);}
#addItemModal .fld>label .req{color:var(--red);}
#addItemModal .fld>label.sp{visibility:hidden;}
#addItemModal .fld input,#addItemModal .fld select{width:100%;height:40px;border:1px solid var(--line);border-radius:10px;padding:0 12px;background:#fff;outline:none;font-size:13px;color:var(--text);}
#addItemModal .fld input[readonly]{background:var(--pu-xl);}
#addItemModal .fld select{appearance:none;-webkit-appearance:none;padding-right:30px;background:#fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%235b2fa8'/%3E%3C/svg%3E") no-repeat right 12px center;}
#addItemModal .fld input:focus,#addItemModal .fld select:focus{border-color:var(--pu-m);box-shadow:0 0 0 3px rgba(91,47,168,.1);}
#addItemModal .chk{display:flex;align-items:center;gap:8px;font-size:12.5px;font-weight:600;color:var(--pu-d);cursor:pointer;}
#addItemModal .chk input{width:15px;height:15px;accent-color:var(--pu);}
#addItemModal .sw{display:flex;align-items:center;justify-content:space-between;gap:10px;background:#fff;border:1px solid var(--line);border-radius:10px;padding:0 12px;font-size:12.5px;font-weight:600;height:40px;}
#addItemModal .sw.f38{min-height:40px;}
#addItemModal label.tg{position:relative;width:38px;height:21px;flex:0 0 38px;display:inline-block;cursor:pointer;}
#addItemModal label.tg input{position:absolute;opacity:0;width:0;height:0;}
#addItemModal label.tg i{position:absolute;inset:0;background:#cfd2e2;border-radius:21px;transition:.2s;}
#addItemModal label.tg i:before{content:"";position:absolute;width:15px;height:15px;left:3px;top:3px;background:#fff;border-radius:50%;transition:.2s;}
#addItemModal label.tg input:checked+i{background:var(--gr);}
#addItemModal label.tg input:checked+i:before{transform:translateX(17px);}
#addItemModal .opt-field.mm-hide{display:none !important;}
@media(max-width:640px){#addItemModal .fgrid{grid-template-columns:1fr;}}

/* ---------- F2: no column dividers, no green footer line ---------- */
table.item-table tbody td,table.item-table thead th{border-right:none !important;}
table.item-table tfoot td{border-top:none !important;background:var(--teal-l);}

/* ---------- F3: charge rows share one grid ---------- */
#saleForm .charge-row{display:grid !important;grid-template-columns:minmax(150px,1.6fr) 40px 66px minmax(90px,1fr) minmax(110px,1.1fr) minmax(110px,1.1fr) 78px 34px;gap:8px;align-items:center;margin-bottom:8px;min-width:720px;}
#saleForm .charge-row>*{min-width:0;}
#saleForm .charge-row select,#saleForm .charge-row input:not([type=checkbox]){width:100%;height:34px;border:1px solid var(--line);border-radius:8px;padding:0 8px;font-size:12px;}
#saleForm .charge-row .icon-add-inline,#saleForm .charge-row .icon-remove-inline{width:34px;height:34px;display:inline-flex;align-items:center;justify-content:center;border-radius:8px;}
#saleForm .charge-row .charge-total{text-align:right;font-weight:700;color:var(--pu-d);}
#saleForm .charge-row label{display:flex;align-items:center;gap:5px;font-size:11px;font-weight:600;white-space:nowrap;overflow:hidden;}
#saleForm .charge-row label input{width:13px;height:13px;accent-color:var(--pu);}

/* ---------- F4: GSTIN always half of Party ---------- */
#saleForm .g-party>.card:first-child .fgrid{display:grid !important;grid-template-columns:1fr 1fr !important;gap:10px 12px;align-items:start;}
#saleForm .g-party>.card:first-child .fgrid>.fld{grid-column:auto !important;min-width:0;}
#saleForm .g-party>.card:first-child .fgrid>.fld:first-child{grid-column:1/-1 !important;}
#saleForm .g-party>.card:first-child .fgrid>.dc{display:grid;grid-template-columns:1fr 1fr;gap:10px 12px;grid-column:1/-1;align-items:start;}
#saleForm .g-party>.card:first-child .fgrid>.dc>.fld{grid-column:auto !important;min-width:0;}
#saleForm .g-party>.card:first-child .fgrid>.dc>.fld.readonly:last-child{grid-column:1/-1 !important;}
#saleForm .g-party>.card:first-child .fgrid>.fld:has(+ #cfgFieldMobileNumber[style*="none"]){grid-column:auto !important;}
#saleForm .g-party>.card:first-child #cfgFieldMobileNumber{grid-column:auto !important;}
@media(max-width:420px){
  #saleForm .g-party>.card:first-child .fgrid>.fld:first-child{grid-column:1/-1 !important;}
}
</style>
<style>
/* ===== HISAB UI FIXES v4 ===== */
/* ---------- C1: Add Item footer buttons (modal is outside #saleForm) ---------- */
#addItemModal .modal-foot .btn{height:38px;padding:0 20px;border-radius:10px;font-weight:600;font-size:13px;border:none;display:inline-flex;align-items:center;justify-content:center;gap:7px;cursor:pointer;}
#addItemModal .modal-foot .btn-o,#addItemModal .modal-foot .btn.btn-o{background:#fff;color:var(--pu);border:1.5px solid #c9b8ea;}
#addItemModal .modal-foot .btn-o:hover{background:var(--pu-l);border-color:var(--pu-m);}
#addItemModal .modal-foot .btn-p,#addItemModal .modal-foot .btn.btn-p{background:var(--pu);color:#fff;border:1.5px solid var(--pu);}
#addItemModal .modal-foot .btn-p:hover{background:var(--pu-d);border-color:var(--pu-d);}

/* ---------- C2: address select modal (scope based, no tabs) ---------- */
#addressSelectModal .mh-txt{min-width:0;}
#addressSelectModal .mh-sub{margin-top:1px;}
#addressSelectModal .am-empty{line-height:1.7;font-size:13px;}
#addressSelectModal .am-empty b{color:var(--pu);font-weight:700;}
#addressSelectModal .am-item{border-radius:14px;}
#addressSelectModal .am-item .ac-line{font-size:13px;color:#222;}
#addressSelectModal .am-item .ac-line.b{font-size:13px;font-weight:700;color:#111;}
#addressSelectModal .am-item.sel{background:var(--gr-l);border-color:var(--gr);}
#addressSelectModal .am-act{align-items:center;align-self:flex-start;}
#addressSelectModal .addr-add-new{margin-right:auto;}
#addressSelectModal .modal-foot .btn-modal-save,#addressSelectModal .modal-foot .btn-modal-cancel{gap:7px;}
</style>
</head>
<body>
<div class="overlay-bg" id="overlayBg"></div>
<div class="toast-stack" id="toastStack"></div>
<div class="global-search-results" id="globalSearchResults"></div>
<div class="party-search-results" id="partySearchResults"></div>
<div class="app">

<?php include 'components/company_insider_sidebar.php'; ?>

<div class="main" id="mainWrap">

  <?php include 'components/company_insider_header.php'; ?>

<div class="content">
  <div class="hk-hero">
    <button type="button" class="hk-back" title="Back" aria-label="Back" onclick="history.back()"><i class="fa-solid fa-chevron-left"></i></button>
    <div><h1><?php echo htmlspecialchars($page_title); ?></h1><p><?php echo htmlspecialchars($company_name . ' • FY ' . $fy_year); ?></p></div>
    <button type="button" class="hk-star" id="hkStar" title="Favourite" aria-label="Favourite"><i class="fa-regular fa-star"></i></button>
  </div>

  <div class="tab-tools">
    <button type="button" class="ai-btn" id="createWithAiBtn"><i class="fa-solid fa-wand-magic-sparkles"></i> Create With AI <span class="tag">New</span></button>
    <button type="button" class="round-btn" id="prevTxnBtn" title="Previous"><i class="fa-solid fa-angle-left"></i></button>
    <button type="button" class="round-btn" id="nextTxnBtn" title="Next"><i class="fa-solid fa-angle-right"></i></button>
    <button type="button" class="round-btn" id="configBtn" title="Credit Note Configuration"><i class="fa-solid fa-gear"></i></button>
  </div>

  <form id="saleForm">
    <div class="grid g-top">
      <div class="card">
        <div class="card-h"><span class="ci"><i class="fa-solid fa-file-lines"></i></span><h3>Credit Note Details</h3></div>
        <div class="fgrid c2">
          <div class="fld"><label>Credit Note Number <span class="req">*</span></label><div class="prefix"><span class="prefix-text">MJGRS/26-27/</span><input type="text" id="creditNoteNumber" value="30" required></div></div>
          <div class="fld"><label>Credit Note Date <span class="req">*</span></label><input type="date" id="creditNoteDate" value="2026-09-05" required></div>
          <div class="fld" id="cfgFieldCreditPeriod" style="display:none;"><label>Credit Period</label><div class="unit"><input type="number" id="creditPeriodValue" min="0" value="0"><select id="creditPeriodUnit"><option>Days</option><option>Month</option></select></div></div>
          <div class="fld" id="cfgFieldValidFor" style="display:none;"><label>Valid For</label><div class="unit"><input type="number" id="validForValue" min="0" value="0"><select id="validForUnit"><option>Days</option><option>Month</option></select></div></div>
          <div class="dc" id="cfgFieldEstimateSaleInput" style="display:none;">
            <div class="fld" id="estimateSaleInputWrap" style="display:none;"><label id="estimateSaleInputLabel">Sales Order</label><input type="number" id="estimateSaleInputValue" min="0" max="100" step="0.01" value="50"></div>
            <div class="fld" id="estimateQuotationSelectWrap" style="display:none;"><label>Select Estimate / Quotation No.</label><select id="estimateQuotationNumberSelect"><option value="">Select</option></select></div>
          </div>
        </div>
      </div>

      <div class="ac">
        <div class="ac-h"><span class="ac-ic"><i class="fa-solid fa-boxes-packing"></i></span><h3>Dispatch Address</h3>
          <div class="ac-acts"><button type="button" class="ib addr-choose-btn" data-scope="dispatch" title="Select / Edit"><i class="fa-solid fa-pen-to-square"></i></button><button type="button" class="ib add addr-add-btn" data-scope="dispatch" title="Add Address"><i class="fa-solid fa-plus"></i></button></div>
        </div>
        <div id="dispatchAddrSelected"></div>
      </div>
    </div>

    <div class="grid g-party">
      <div class="card">
        <div class="card-h"><span class="ci"><i class="fa-solid fa-users"></i></span><h3>Party Details</h3></div>
        <div class="fgrid">
          <div class="fld" style="grid-column:1/-1;"><label>Party <span class="req">*</span></label>
            <div class="with-btn party-search-wrap"><input type="text" id="partySearchInput" placeholder="Search party..." autocomplete="off" required><button type="button" class="btn btn-add btn-ic field-icon-btn" data-modal="addPartyModal" title="Add party"><i class="fa-solid fa-plus"></i></button></div>
            <input type="hidden" id="partySelect" value="">
          </div>
          <div class="fld"><label>GSTIN</label><div class="with-btn"><input type="text" id="partyGstin" maxlength="15"><button type="button" class="btn btn-p btn-ic" id="fetchPartyGstBtn" title="Fetch GSTIN details"><i class="fa-solid fa-magnifying-glass"></i></button></div></div>
          <div class="fld" id="cfgFieldMobileNumber" style="display:none;"><label>Mobile Number</label><input type="text" id="invoiceMobileNumber" maxlength="10"></div>
          <div class="dc" id="creditInvoiceReferenceRow">
            <div class="fld"><label>Invoice Number <span class="req">*</span></label><select id="creditInvoiceNumber" required><option value="">Select Invoice</option></select></div>
            <div class="fld readonly"><label>Invoice Date</label><input type="date" id="creditInvoiceDate" value="" readonly></div>
            <div class="fld readonly"><label>Invoice Total Amount</label><input type="text" id="creditInvoiceTotalAmount" value="₹ 0.00" readonly></div>
          </div>
        </div>
      </div>

      <div class="ac">
        <div class="ac-h"><span class="ac-ic"><i class="fa-solid fa-building"></i></span><h3>Billing Address</h3>
          <div class="ac-acts"><button type="button" class="ib addr-choose-btn" data-scope="billing" title="Select / Edit"><i class="fa-solid fa-pen-to-square"></i></button><button type="button" class="ib add addr-add-btn" data-scope="billing" title="Add Address"><i class="fa-solid fa-plus"></i></button></div>
        </div>
        <div id="billingAddrSelected"></div>
      </div>

      <div class="ac">
        <div class="ac-h"><span class="ac-ic"><i class="fa-solid fa-truck"></i></span><h3>Shipping Address</h3>
          <div class="ac-acts"><label class="same-chk"><input type="checkbox" id="shipSameAsBilling" checked> Same as Billing</label><button type="button" class="ib addr-choose-btn" data-scope="shipping" title="Select / Edit"><i class="fa-solid fa-pen-to-square"></i></button><button type="button" class="ib add addr-add-btn" data-scope="shipping" title="Add Address"><i class="fa-solid fa-plus"></i></button></div>
        </div>
        <div id="shippingAddrSelected"></div>
        <div class="ac-sub" id="shippingSummary">No shipping address set.</div>
      </div>
    </div>

    <div class="card item-table-card" style="margin-bottom:12px;">
      <div class="card-h"><span class="ci t"><i class="fa-solid fa-cube"></i></span><h3>Item Details</h3>
        <div class="ch-act">
          <button type="button" class="btn btn-o btn-sm" id="scanBarcodeBtn" title="Scan barcode"><i class="fa-solid fa-barcode"></i> Scan</button>
          <div class="seg"><label><input type="radio" name="invoiceMode" value="item" checked><span>Item Invoice</span></label><label><input type="radio" name="invoiceMode" value="accounting"><span>Accounting Invoice</span></label></div>
          <div class="pm item-price-mode" id="itemPriceModeWrap">Price Mode: <select id="unitPriceMode" class="ipm-select"><option value="without">Without Tax</option><option value="with">With Tax</option></select></div>
        </div>
      </div>
      <div class="item-table-wrap">
        <table class="item-table cfg-hide-discount1 cfg-hide-discount2 cfg-hide-totaldiscount cfg-hide-mrp cfg-hide-itemdesc cfg-hide-godown cfg-hide-itemgroup" id="itemTable">
          <thead>
            <tr>
              <th class="col-sr">Sr No.</th>
              <th class="col-item" id="itemColHeader">Item Name</th>
              <th class="col-itemgroup">Item Group</th>
              <th class="col-sku">SKU</th>
              <th class="col-hsn">HSN / SAC</th>
              <th class="col-godown">Godown</th>
              <th class="col-uom">UOM</th>
              <th class="col-qty">Quantity</th>
              <th class="col-mrp">MRP</th>
              <th class="col-price">Unit Price</th>
              <th class="col-gst">Tax Rate</th>
              <th class="col-discount1">Discount 1</th>
              <th class="col-discount2">Discount 2</th>
              <th class="col-totaldiscount">Total Disc.</th>
              <th class="col-taxable">Taxable Amt.</th>
              <th class="col-tax">Tax</th>
              <th class="col-cess">CESS</th>
              <th class="col-total">Total</th>
              <th class="col-action">Action</th>
            </tr>
          </thead>
          <tbody id="itemTableBody"></tbody>
          <tfoot>
            <tr>
              <td class="col-sr"></td>
              <td class="col-item"><button type="button" class="add-line-btn" id="addLineBtn"><i class="fa-solid fa-plus"></i> Add Item</button></td>
              <td class="col-itemgroup"></td>
              <td class="col-sku"></td>
              <td class="col-hsn"></td>
              <td class="col-godown"></td>
              <td class="col-uom"></td>
              <td class="num col-qty" id="footQty">0.00</td>
              <td class="col-mrp"></td>
              <td class="col-price"></td>
              <td class="col-gst"></td>
              <td class="col-discount1"></td>
              <td class="col-discount2"></td>
              <td class="col-totaldiscount"></td>
              <td class="num col-taxable" id="footTaxable">0.00</td>
              <td class="num col-tax" id="footTax">0.00</td>
              <td class="num col-cess" id="footCess">0.00</td>
              <td class="num col-total" id="footTotal">0.00</td>
              <td class="col-action"></td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>

    <div class="grid g-bottom">
      <div class="stack">
        <div class="card" id="bankDetailsSection">
          <div class="card-h"><span class="ci t"><i class="fa-solid fa-building-columns"></i></span><h3>Bank Details</h3></div>
          <div class="fld"><label>Bank</label><div class="with-btn"><select id="bankSelect" data-entity="bank">
                <option value="">Select Bank</option>
                <?php foreach($banks as $b): ?>
                <option value="<?php echo $b['id']; ?>"><?php echo htmlspecialchars($b['name']); ?></option>
                <?php endforeach; ?>
              </select><button type="button" class="btn btn-add btn-ic field-icon-btn" data-modal="addBankModal" data-target="#bankSelect" title="Add bank"><i class="fa-solid fa-plus"></i></button></div></div>
        </div>
        <div class="card" id="uploadDocumentSection">
          <div class="card-h"><span class="ci"><i class="fa-solid fa-cloud-arrow-up"></i></span><h3>Upload Document</h3></div>
          <div class="upload"><i class="fa-solid fa-cloud-arrow-up"></i><b>Drag &amp; drop files here or click to upload</b><small>Supported formats: Images, PDF, DOCX, XLSX</small><input type="file" id="docUpload" multiple accept="image/*,.pdf,.docx,.xlsx"></div>
          <div class="chips upload-list" id="uploadList"></div>
        </div>
        <div class="card grow" id="chargesSec">
          <div class="card-h"><span class="ci"><i class="fa-solid fa-plus"></i></span><h3>Additional Charges</h3><div class="ch-act"><button type="button" class="btn btn-gl btn-sm" id="addChargeBtn"><i class="fa-solid fa-plus"></i> Add Charge</button></div></div>
          <div class="hscroll charges-scroll-wrap"><div id="additionalChargesRows"></div></div>
          <div class="sub-h"><i class="fa-solid fa-scale-balanced"></i> Add / Less <button type="button" class="btn btn-gl btn-sm" id="addLessBtn" style="margin-left:auto;"><i class="fa-solid fa-plus"></i> Add / Less</button></div>
          <div class="hscroll charges-scroll-wrap"><div id="addLessRows"></div></div>
        </div>
        <div class="card" id="termsSection" style="display:none;">
          <div class="card-h"><span class="ci"><i class="fa-solid fa-file-contract"></i></span><h3>Terms &amp; Conditions</h3></div>
          <div class="fld"><label>Terms &amp; Conditions</label><textarea id="termsText" rows="3" placeholder="Enter Terms & Conditions..."></textarea></div>
        </div>
        <div class="card" id="noteSection" style="display:none;">
          <div class="card-h"><span class="ci"><i class="fa-solid fa-note-sticky"></i></span><h3>Note</h3></div>
          <div class="fld"><label>Note</label><textarea id="noteText" rows="2" placeholder="Enter Note..."></textarea></div>
        </div>
      </div>

      <div class="stack">
        <div class="card sum-card" id="sumSec">
          <div class="sum-head"><i class="fa-solid fa-calculator"></i> Order Summary</div>
          <div class="sum-body">
            <div class="srow"><span>Taxable Value</span><span id="sumTaxable">₹ 0.00</span></div>
            <div class="srow"><span>IGST</span><span id="sumIgst">₹ 0.00</span></div>
            <div class="srow"><span>CGST</span><span id="sumCgst">₹ 0.00</span></div>
            <div class="srow"><span>SGST</span><span id="sumSgst">₹ 0.00</span></div>
            <div class="srow" id="cessRow"><span>CESS</span><input type="number" id="cessInput" value="0" step="0.01" min="0"></div>
            <div class="srow" id="tcsRow" style="display:none;"><span>TCS</span><div class="dual"><input type="number" id="tcsPctInput" class="pct" value="0" step="0.01" min="0" placeholder="%" title="TCS %"><input type="number" id="tcsAmountInput" class="amt" value="0" step="0.01" readonly placeholder="Amount" title="TCS Amount"></div></div>
            <div class="srow" id="tdsRow" style="display:none;"><span>TDS</span><div class="dual"><input type="number" id="tdsPctInput" class="pct" value="0" step="0.01" min="0" placeholder="%" title="TDS %"><input type="number" id="tdsAmountInput" class="amt" value="0" step="0.01" readonly placeholder="Amount" title="TDS Amount"></div></div>
            <div class="srow"><span>Additional Charges</span><span id="sumCharges">₹ 0.00</span></div>
            <div class="srow"><span>Add / Less</span><span id="sumAddLess">₹ 0.00</span></div>
            <div class="srow"><span>Round Off <button type="button" class="auto" id="autoRoundBtn">Auto</button></span><input type="number" id="roundOffInput" value="0" step="0.01"></div>
            <div class="grand"><span>Grand Total</span><span id="sumGrand">₹ 0.00</span></div>
          </div>
        </div>
        <div class="card grow" id="transportSec">
          <div class="card-h"><span class="ci"><i class="fa-solid fa-truck-fast"></i></span><h3>Transporter Details</h3></div>
          <div class="fgrid c2">
              <div class="fld"><label>Transporter Name</label><div class="with-btn"><select id="transporterSelect" data-entity="transporter">
                <option value="">Select Transporter</option>
                <?php foreach($transporters as $t): ?>
                <option value="<?php echo $t['id']; ?>"><?php echo htmlspecialchars($t['name']); ?></option>
                <?php endforeach; ?>
              </select><button type="button" class="btn btn-add btn-ic" data-modal="addTransporterModal" data-target="#transporterSelect" title="Add transporter"><i class="fa-solid fa-plus"></i></button></div></div>
              <div class="fld"><label>Transporter GSTIN</label><input type="text" id="transporterGstin" maxlength="15"></div>
              <div class="fld"><label>Transporter Mode</label><select id="transporterMode"><option value="Road" selected>Road</option><option value="Rail">Rail</option><option value="Air">Air</option><option value="Ship">Ship</option></select></div>
              <div class="fld"><label>Vehicle Number</label><input type="text" id="vehicleNumber" placeholder="e.g. TR01AB1234"></div>
          </div>
          <div id="legacyTransportFields" hidden>
          <div class="tw" id="complianceRow">
            <label><input type="checkbox" id="generateEwayBill"> Generate E-Way Bill</label>
            <label><input type="checkbox" id="generateEinvoice"> Generate E-Invoice</label>
            <label id="generateDeliveryChallanWrap"><input type="checkbox" id="generateDeliveryChallan"> Generate Delivery Challan</label>
          </div>
          <div class="fgrid c2" id="manualEwaySection">
            <div class="fld"><label>E-Way Bill Number</label><input type="text" id="ewayBillNumber" placeholder="Enter if already generated"></div>
            <div class="fld"><label>E-Way Bill Date</label><input type="date" id="ewayBillDate"></div>
          </div>
          <div class="partb" id="partBSection">
            <div class="partb-h">TRANSPORT &amp; PART B DETAILS</div>
            <div class="fgrid c2">
              <div class="fld"><label>Document Date</label><input type="date" id="documentDate"></div>
              <div class="fld"><label>Document Number</label><input type="text" id="documentNumber"></div>
              <div class="fld"><label>Transaction Type</label><select id="transactionType"><option value="Regular" selected>Regular</option><option value="Bill To - Ship To">Bill To - Ship To</option><option value="Bill From - Ship From">Bill From - Ship From</option><option value="Combination">Combination</option></select></div>
              <div class="fld"><label>Vehicle Type</label><select id="vehicleType"><option value="Regular" selected>Regular</option><option value="ODC">ODC</option></select></div>
              <div class="fld"><label>Distance</label><input type="text" id="distance"></div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bar" id="fixedBottom">
      <button type="button" class="btn btn-o" id="saveBtn"><i class="fa-solid fa-floppy-disk"></i> Save</button>
      <button type="button" class="btn btn-o" id="saveNewBtn"><i class="fa-solid fa-plus"></i> Save &amp; New</button>
      <button type="button" class="btn btn-g" id="savePrintBtn"><i class="fa-solid fa-print"></i> Save &amp; Print</button>
      <button type="button" class="btn btn-o" id="backBtn"><i class="fa-solid fa-arrow-left"></i> Back</button>
    </div>
  </form>
</div>
</div>
</div>

<div class="modal-overlay mm-form" id="addressFormModal">
  <div class="modal-box mm-w-600" id="addressFormBox">
    <div class="modal-head">
      <span class="mh-ic"><i class="fa-solid fa-location-dot"></i></span><div class="mh-txt"><h5 id="addressFormTitle">Dispatch Address</h5><p class="mh-sub">Add or edit this address</p></div>
      <div class="modal-head-actions">
        <button type="button" class="icon-btn-sm" id="addrRubberGearBtn" title="Rubber Dealer Settings" hidden><i class="fa-solid fa-gear"></i></button>
        <button type="button" class="modal-close" data-close="addressFormModal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
      </div>
      <div class="settings-panel rubber-panel" id="addrRubberPanel">
        <div class="sp-title">Rubber Dealer Settings</div>
        <div class="settings-item"><span>Rubber Dealer</span><label class="toggle-switch"><input type="checkbox" id="addrPRubberToggle"><span class="toggle-slider"></span></label></div>
        <div class="rubber-fields" id="addrPRubberFields" hidden>
          <div class="field-group"><label>Rubber Dealer License</label><input type="text" id="addrPRubberLicense"></div>
          <div class="field-group"><label>Rubber Dealer Expiry</label><input type="text" id="addrPRubberExpiry" placeholder="dd/mm/yyyy"></div>
        </div>
      </div>
    </div>
    <div class="modal-body">
      <div class="form-grid" id="addrSetDispatch">
        <div class="field-group"><label>Address Line 1 <span class="req">*</span></label><input type="text" id="addrFormLine1"></div>
        <div class="field-group"><label>Address Line 2</label><input type="text" id="addrFormLine2"></div>
        <div class="field-group with-icon"><label>GSTIN Number</label><input type="text" id="addrFormGstin" maxlength="15"><button type="button" class="field-icon-btn" id="fetchGstinAddressBtn" title="Fetch GSTIN details"><i class="fa-solid fa-magnifying-glass"></i></button></div>
        <div class="field-group"><label>Company Name</label><input type="text" id="addrFormCompany"></div>
        <div class="field-group"><label>City <span class="req">*</span></label><input type="text" id="addrFormCity"></div>
        <div class="field-group"><label>Pincode <span class="req">*</span></label><input type="text" id="addrFormPincode" maxlength="6"></div>
        <div class="field-group"><label>State <span class="req">*</span></label><select id="addrFormState"></select></div>
        <div class="field-group"><label>Country <span class="req">*</span></label><select id="addrFormCountry"><option value="India" selected>India</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United States">United States</option><option value="United Kingdom">United Kingdom</option><option value="Singapore">Singapore</option><option value="China">China</option><option value="Nepal">Nepal</option><option value="Bangladesh">Bangladesh</option><option value="Sri Lanka">Sri Lanka</option><option value="Other">Other</option></select></div>
      </div>
      <div class="form-grid" id="addrSetParty" hidden>
        <div class="field-group"><label>Registration Type</label><select id="addrPReg"><option value="">Select Registration Type</option><option value="regular">Registered Business - Regular</option><option value="unregistered">Unregistered Business</option><option value="composition">Registered Business - Composition</option><option value="tds">Tax Deductor / Tax Collector</option><option value="consumer">Consumer</option></select></div>
        <div class="field-group with-icon hidden-field" id="addrPGstPanGroup"><label id="addrPGstPanLabel">GST Number</label><input type="text" id="addrPGstPan" maxlength="15"><button type="button" class="field-icon-btn" id="fetchGstinAddrPartyBtn" title="Fetch GSTIN details"><i class="fa-solid fa-magnifying-glass"></i></button></div>
        <div class="field-group"><label>Legal Name</label><input type="text" id="addrPLegal"></div>
        <div class="field-group hidden-field" id="addrPTradeGroup"><label>Trade Name</label><input type="text" id="addrPTrade"></div>
        <div class="field-group"><label>Pincode <span class="req">*</span></label><input type="text" id="addrPPincode" maxlength="6"></div>
        <div class="field-group"><label>Address Line 1</label><input type="text" id="addrPLine1"></div>
        <div class="field-group"><label>Address Line 2</label><input type="text" id="addrPLine2"></div>
        <div class="field-group"><label>Place <span class="req">*</span></label><input type="text" id="addrPPlace"></div>
        <div class="field-group"><label>City</label><input type="text" id="addrPCity"></div>
        <div class="field-group"><label>State <span class="req">*</span></label><select id="addrPState"></select></div>
        <div class="field-group"><label>Country <span class="req">*</span></label><select id="addrPCountry"><option value="India" selected>India</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United States">United States</option><option value="United Kingdom">United Kingdom</option><option value="Singapore">Singapore</option><option value="China">China</option><option value="Nepal">Nepal</option><option value="Bangladesh">Bangladesh</option><option value="Sri Lanka">Sri Lanka</option><option value="Other">Other</option></select></div>
      </div>
    </div>
    <div class="modal-foot">
      <button type="button" class="btn-modal-cancel" data-close="addressFormModal">Cancel</button>
      <button type="button" class="btn-modal-save" id="saveAddressFormBtn"><i class="fa-solid fa-check"></i> Save</button>
    </div>
  </div>
</div>

<div class="modal-overlay mm-form" id="addressSelectModal">
  <div class="modal-box mm-w-620">
    <div class="modal-head">
      <span class="mh-ic" id="addressSelectIcon"><i class="fa-solid fa-location-dot"></i></span>
      <div class="mh-txt"><h5 id="addressSelectTitle">Select Address</h5><p class="mh-sub" id="addressSelectSub"></p></div>
      <button type="button" class="modal-close" data-close="addressSelectModal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="modal-body">
      <div class="addr-list" id="addressSelectList"></div>
    </div>
    <div class="modal-foot">
      <button type="button" class="addr-add-new" id="addressSelectAddNew"><i class="fa-solid fa-plus"></i> Add New Address</button>
      <button type="button" class="btn-modal-cancel" data-close="addressSelectModal">Cancel</button>
      <button type="button" class="btn-modal-save" id="addressSelectDoneBtn"><i class="fa-solid fa-check"></i> Done</button>
    </div>
  </div>
</div>

<div class="modal-overlay mm-form" id="addPartyModal">
  <div class="modal-box mm-w-720">
    <div class="modal-head">
      <span class="mh-ic"><i class="fa-solid fa-user-plus"></i></span><div class="mh-txt"><h5>Add Customer</h5><p class="mh-sub">Create a new party and use it on this credit note</p></div>
      <button type="button" class="modal-close" data-close="addPartyModal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="modal-body">
      <form id="addPartyForm" onsubmit="return false;" autocomplete="off">
        <div class="mm-tabs"><button type="button" class="on" data-tab="pb">Customer Basic Details</button><button type="button" data-tab="pa">Billing Address</button><button type="button" data-tab="pf">Balance &amp; Credit</button></div>
        <div class="mm-tp on" data-p="pb">
        <div class="form-grid g12">
          <div class="field-group"><label>Registration Type</label><select id="newPartyRegType"><option value="">Select Registration Type</option><option value="regular">Registered Business - Regular</option><option value="unregistered">Unregistered Business</option><option value="composition">Registered Business - Composition</option><option value="tds">Tax Deductor / Tax Collector</option><option value="consumer">Consumer</option></select></div>
          <div class="field-group with-icon hidden-field" id="newPartyGstPanGroup"><label id="newPartyGstPanLabel">GST Number</label><input type="text" id="newPartyGstin" maxlength="15"><button type="button" class="field-icon-btn" id="fetchGstinPartyBtn" title="Fetch GSTIN details"><i class="fa-solid fa-magnifying-glass"></i></button></div>
          <div class="field-group"><label>Legal Name</label><input type="text" id="newPartyName"></div>
          <div class="field-group hidden-field" id="newPartyTradeGroup"><label>Trade Name</label><input type="text" id="newPartyTradeName"></div>
          <div class="field-group"><label>Business Entity</label><select id="newPartyEntity"><option value="">Select entity</option><option value="Proprietorship">Proprietorship</option><option value="HUF">HUF</option><option value="Partnership Firm">Partnership Firm</option><option value="LLP">LLP</option><option value="Private Limited Company">Private Limited Company</option><option value="Public Limited Company">Public Limited Company</option><option value="AOP">AOP</option><option value="Trust">Trust</option><option value="Others">Others</option></select></div>
          <div class="field-group"><label>PAN Details</label><input type="text" id="newPartyPan"></div>
          <div class="field-group"><label>Email</label><input type="email" id="newPartyEmail"></div>
          <div class="field-group"><label>Mobile Number</label><input type="text" id="newPartyPhone1" maxlength="10"></div>
        </div>
        </div>
        <div class="mm-tp" data-p="pa">
        <div class="form-grid g12">
          <div class="field-group"><label>Address 1</label><input type="text" id="newPartyAddr1"></div>
          <div class="field-group"><label>Address 2 (Optional)</label><input type="text" id="newPartyAddr2"></div>
          <div class="field-group"><label>Place</label><input type="text" id="newPartyPlace"></div>
          <div class="field-group"><label>City</label><input type="text" id="newPartyCity"></div>
        </div>
        <div class="form-grid g12" style="margin-top:10px;">
          <div class="field-group"><label>Pin Code <span class="req">*</span></label><input type="text" id="newPartyPincode" maxlength="6"></div>
          <div class="field-group"><label>State <span class="req">*</span></label><select id="newPartyState" data-entity="state"></select></div>
          <div class="field-group"><label>Country <span class="req">*</span></label><select id="newPartyCountry"><option value="India" selected>India</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United States">United States</option><option value="United Kingdom">United Kingdom</option><option value="Singapore">Singapore</option><option value="China">China</option><option value="Nepal">Nepal</option><option value="Bangladesh">Bangladesh</option><option value="Sri Lanka">Sri Lanka</option><option value="Other">Other</option></select></div>
        </div>
        </div>
        <div class="mm-tp" data-p="pf">
        <div class="form-grid g12" style="margin-top:10px;">
          <div class="field-group"><label>Opening Balance Date</label><input type="text" id="newPartyObDate" placeholder="dd/mm/yyyy"></div>
          <div class="ob-row">
            <div class="field-group"><label>Opening Balance (Amount) <span class="req">*</span></label><input type="number" step="0.01" id="newPartyObAmount" value="0.00"></div>
            <div class="mm-seg"><label><input type="radio" name="newPartyObType" value="Dr" checked><span>Debit</span></label><label><input type="radio" name="newPartyObType" value="Cr"><span>Credit</span></label></div>
          </div>
        </div>
        <div class="form-grid g12" style="margin-top:10px;">
          <div class="field-group" id="newPartyCreditGroup"><label>Allowed Credit Limit</label><input type="number" step="0.01" id="newPartyCreditLimit" value="0.00"></div>
          <div id="newPartyRubberDealerSection">
            <div class="field-group"><label>Rubber Dealer License</label><input type="text" id="newPartyRubberLicence"></div>
            <div class="field-group span-2"><label>Rubber Dealer Expiry</label><input type="date" id="newPartyRubberExpiry"></div>
          </div>
        </div>
        </div>
      </form>
    </div>
    <div class="modal-foot">
      <button type="button" class="btn-modal-save" id="savePartyBtn"><i class="fa-solid fa-check"></i> Save Customer</button>
      <button type="button" class="btn-modal-cancel" data-close="addPartyModal">Cancel</button>
    </div>
  </div>
</div>

<div class="modal-overlay mm-form" id="addPartyGroupModal">
  <div class="modal-box">
    <div class="modal-head"><span class="mh-ic g"><i class="fa-solid fa-layer-group"></i></span><div class="mh-txt"><h4>Add Party Group</h4></div><button class="modal-close" data-close="addPartyGroupModal"><i class="fa-solid fa-xmark"></i></button></div>
    <div class="modal-body">
      <form id="addPartyGroupForm">
        <div class="form-row" style="margin-bottom:0;">
          <div class="form-col wide"><div class="field-group"><label>Group Name <span class="req">*</span></label><input type="text" id="newPartyGroupName" required></div></div>
        </div>
      </form>
    </div>
    <div class="modal-foot">
      <button class="btn-modal-cancel" data-close="addPartyGroupModal">Cancel</button>
      <button class="btn-modal-save" id="savePartyGroupBtn"><i class="fa-solid fa-check"></i> Save</button>
    </div>
  </div>
</div>

<div class="modal-overlay mm-form" id="addBrokerModal">
  <div class="modal-box">
    <div class="modal-head"><span class="mh-ic g"><i class="fa-solid fa-handshake"></i></span><div class="mh-txt"><h4>Add Broker</h4></div><button class="modal-close" data-close="addBrokerModal"><i class="fa-solid fa-xmark"></i></button></div>
    <div class="modal-body">
      <form id="addBrokerForm">
        <div class="form-row" style="margin-bottom:0;">
          <div class="form-col wide"><div class="field-group"><label>Broker Name <span class="req">*</span></label><input type="text" id="newBrokerName" required></div></div>
        </div>
      </form>
    </div>
    <div class="modal-foot">
      <button class="btn-modal-cancel" data-close="addBrokerModal">Cancel</button>
      <button class="btn-modal-save" id="saveBrokerBtn"><i class="fa-solid fa-check"></i> Save</button>
    </div>
  </div>
</div>

<div class="modal-overlay mm-form" id="addLedgerModal">
  <div class="modal-box">
    <div class="modal-head"><span class="mh-ic g"><i class="fa-solid fa-book"></i></span><div class="mh-txt"><h4>Add Ledger</h4></div><button class="modal-close" data-close="addLedgerModal"><i class="fa-solid fa-xmark"></i></button></div>
    <div class="modal-body">
      <form id="addLedgerForm">
        <div class="form-row">
          <div class="form-col wide">
            <div class="field-group">
              <label>Ledger Name <span class="req">*</span></label>
              <input type="text" id="newLedgerName" required>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-col wide">
            <div class="field-group">
              <label>Under Group <span class="req">*</span></label>
              <select id="newLedgerGroup" required>
                <option value="">Select Group</option>
                <option>Sales Accounts</option>
                <option>Purchase Accounts</option>
                <option>Duties &amp; Taxes</option>
                <option>Indirect Expenses</option>
                <option>Indirect Income</option>
                <option>Bank Accounts</option>
                <option>Sundry Debtors</option>
                <option>Sundry Creditors</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-row" style="margin-bottom:0;">
          <div class="form-col"><div class="field-group"><label>Opening Balance</label><input type="number" id="newLedgerOpening" value="0" step="0.01"></div></div>
          <div class="form-col">
            <div class="field-group">
              <label>Balance Type</label>
              <select id="newLedgerBalanceType"><option>Debit</option><option>Credit</option></select>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="modal-foot">
      <button class="btn-modal-cancel" data-close="addLedgerModal">Cancel</button>
      <button class="btn-modal-save" id="saveLedgerBtn"><i class="fa-solid fa-check"></i> Save</button>
    </div>
  </div>
</div>

<div class="modal-overlay mm-form" id="addTransporterModal">
  <div class="modal-box wide">
    <div class="modal-head">
      <span class="mh-ic g"><i class="fa-solid fa-truck"></i></span><div class="mh-txt"><h4>Add Transport</h4></div>
      <div class="modal-head-actions">
        <button type="button" class="btn-fetch-gstin-header" id="fetchGstinTransporterBtn"><i class="fa-solid fa-magnifying-glass"></i> Fetch GSTIN Details</button>
        <button class="modal-close" data-close="addTransporterModal"><i class="fa-solid fa-xmark"></i></button>
      </div>
    </div>
    <div class="modal-body">
      <form id="addTransporterForm">
        <div class="form-row">
          <div class="form-col wide"><div class="field-group"><label>Transport Name <span class="req">*</span></label><input type="text" id="newTransporterName" required></div></div>
          <div class="form-col wide"><div class="field-group"><label>GSTIN/Transporter ID</label><input type="text" id="newTransporterGstin" maxlength="15"></div></div>
        </div>
        <div class="form-row">
          <div class="form-col wide"><div class="field-group"><label>Address Line 1</label><input type="text" id="newTransporterAddr1"></div></div>
          <div class="form-col wide"><div class="field-group"><label>Address Line 2</label><input type="text" id="newTransporterAddr2"></div></div>
        </div>
        <div class="form-row">
          <div class="form-col">
            <div class="field-group">
              <label>Country</label>
              <select id="newTransporterCountry"><option>India</option></select>
            </div>
          </div>
          <div class="form-col">
            <div class="field-group">
              <label>State</label>
              <select id="newTransporterState" data-entity="state"></select>
            </div>
          </div>
          <div class="form-col">
            <div class="field-group">
              <label>City</label>
              <select id="newTransporterCity">
                <option value="">Select City</option>
                <option>Agartala</option>
                <option>Guwahati</option>
                <option>Kolkata</option>
                <option>Silchar</option>
              </select>
            </div>
          </div>
          <div class="form-col"><div class="field-group"><label>Pincode</label><input type="text" id="newTransporterPincode" maxlength="6"></div></div>
        </div>
        <div class="modal-section-head">Contact Detail</div>
        <div class="form-row">
          <div class="form-col"><div class="field-group"><label>Name</label><input type="text" id="newTransporterContactName"></div></div>
          <div class="form-col">
            <div class="field-group">
              <label>Contact Number</label>
              <select class="cc-select"><option>+91</option></select>
              <input type="text" id="newTransporterContact" maxlength="10">
            </div>
          </div>
          <div class="form-col"><div class="field-group"><label>Email</label><input type="email" id="newTransporterEmail"></div></div>
        </div>
        <div class="switch-row"><span>Create With Ledger</span><label class="toggle"><input type="checkbox" id="newTransporterCreateLedger"><span></span></label></div>
      </form>
    </div>
    <div class="modal-foot">
      <button class="btn-modal-cancel" data-close="addTransporterModal">Cancel</button>
      <button class="btn-modal-save" id="saveTransporterBtn"><i class="fa-solid fa-check"></i> Save</button>
    </div>
  </div>
</div>

<div class="modal-overlay mm-form" id="addUomModal">
  <div class="modal-box">
    <div class="modal-head"><span class="mh-ic g"><i class="fa-solid fa-ruler"></i></span><div class="mh-txt"><h4>Add Unit of Measurement</h4></div><button class="modal-close" data-close="addUomModal"><i class="fa-solid fa-xmark"></i></button></div>
    <div class="modal-body">
      <form id="addUomForm">
        <div class="form-row" style="margin-bottom:0;">
          <div class="form-col"><div class="field-group"><label>Short Name <span class="req">*</span></label><input type="text" id="newUomShort" maxlength="6" required></div></div>
          <div class="form-col"><div class="field-group"><label>Full Name <span class="req">*</span></label><input type="text" id="newUomFull" required></div></div>
        </div>
      </form>
    </div>
    <div class="modal-foot">
      <button class="btn-modal-cancel" data-close="addUomModal">Cancel</button>
      <button class="btn-modal-save" id="saveUomBtn"><i class="fa-solid fa-check"></i> Save</button>
    </div>
  </div>
</div>

<div class="modal-overlay mm-form" id="addCategoryModal">
  <div class="modal-box">
    <div class="modal-head"><span class="mh-ic g"><i class="fa-solid fa-tags"></i></span><div class="mh-txt"><h4>Add Item Category</h4></div><button class="modal-close" data-close="addCategoryModal"><i class="fa-solid fa-xmark"></i></button></div>
    <div class="modal-body">
      <form id="addCategoryForm">
        <div class="form-row" style="margin-bottom:0;">
          <div class="form-col wide"><div class="field-group"><label>Category Name <span class="req">*</span></label><input type="text" id="newCategoryName" required></div></div>
        </div>
      </form>
    </div>
    <div class="modal-foot">
      <button class="btn-modal-cancel" data-close="addCategoryModal">Cancel</button>
      <button class="btn-modal-save" id="saveCategoryBtn"><i class="fa-solid fa-check"></i> Save</button>
    </div>
  </div>
</div>

<div class="modal-overlay mm-form" id="addCessRateModal">
  <div class="modal-box">
    <div class="modal-head"><span class="mh-ic g"><i class="fa-solid fa-percent"></i></span><div class="mh-txt"><h4>Add GST CESS Rate</h4></div><button class="modal-close" data-close="addCessRateModal"><i class="fa-solid fa-xmark"></i></button></div>
    <div class="modal-body">
      <form id="addCessRateForm">
        <div class="form-row" style="margin-bottom:0;">
          <div class="form-col wide"><div class="field-group"><label>CESS Rate (%) <span class="req">*</span></label><input type="number" id="newCessRateValue" step="0.01" min="0" required></div></div>
        </div>
      </form>
    </div>
    <div class="modal-foot">
      <button class="btn-modal-cancel" data-close="addCessRateModal">Cancel</button>
      <button class="btn-modal-save" id="saveCessRateBtn"><i class="fa-solid fa-check"></i> Save</button>
    </div>
  </div>
</div>

<div class="modal-overlay mm-form" id="addBankModal">
  <div class="modal-box bank-box">
    <div class="modal-head"><div class="mh-txt"><h4>Add Bank</h4></div><button class="modal-close" data-close="addBankModal"><i class="fa-solid fa-xmark"></i></button></div>
    <div class="modal-body">
      <form id="addBankForm">
        <div class="form-row">
          <div class="form-col wide"><div class="field-group"><label>Bank Name <span class="req">*</span></label><input type="text" id="newBankName" required></div></div>
        </div>
        <div class="form-row" style="margin-bottom:0;">
          <div class="form-col"><div class="field-group"><label>Account Number <span class="req">*</span></label><input type="text" id="newBankAccount" required></div></div>
          <div class="form-col"><div class="field-group"><label>IFSC Code</label><input type="text" id="newBankIfsc"></div></div>
        </div>
      </form>
    </div>
    <div class="modal-foot">
      <button class="btn-modal-cancel" data-close="addBankModal">Cancel</button>
      <button class="btn-modal-save" id="saveBankBtn"><i class="fa-solid fa-check"></i> Save</button>
    </div>
  </div>
</div>

<div class="modal-overlay" id="addItemModal">
  <div class="modal-box itm-box">
    <div class="modal-head">
      <div class="mh-txt"><h4>Add Item</h4><p class="mh-sub">Create a new item and add it to this credit note</p></div>
      <div class="mh-acts"><button type="button" class="mh-btn" id="itemFieldSettingsBtn" title="Additional Fields"><i class="fa-solid fa-gear"></i></button><button type="button" class="modal-close" data-close="addItemModal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button></div>
      <div class="settings-panel" id="itemFieldSettingsPanel">
        <div class="sp-title">Additional Fields</div>
        <div class="sp-item"><span>GST CESS Rate</span><label class="tg"><input type="checkbox" data-field="cess" checked><i></i></label></div>
        <div class="sp-item"><span>Decimal Place For Rate</span><label class="tg"><input type="checkbox" data-field="rate_decimal" checked><i></i></label></div>
        <div class="sp-item"><span>Re Order Level</span><label class="tg"><input type="checkbox" data-field="reorder" checked><i></i></label></div>
        <div class="sp-item"><span>Batch Details</span><label class="tg"><input type="checkbox" data-field="batch" checked><i></i></label></div>
        <div class="sp-item"><span>Expiry Details</span><label class="tg"><input type="checkbox" data-field="expiry" checked><i></i></label></div>
        <div class="sp-item"><span>Bar Code</span><label class="tg"><input type="checkbox" data-field="barcode" checked><i></i></label></div>
        <div class="sp-item"><span>Negative Stock Allowed</span><label class="tg"><input type="checkbox" data-field="negative" checked><i></i></label></div>
        <div class="sp-item"><span>Secondary Unit</span><label class="tg"><input type="checkbox" data-field="secondary_uom" checked><i></i></label></div>
      </div>
    </div>
    <div class="modal-body">
      <form id="addItemForm" onsubmit="return false;" autocomplete="off">
        <div class="sec-t">Basic Items Info</div>
        <div class="fgrid c2">
          <div class="fld"><label>Item Name <span class="req">*</span></label><input type="text" id="newItemName"></div>
          <div class="fld"><label>Category</label><select id="newItemCategory" data-entity="category"></select></div>
          <div class="fld"><label>Primary UOM <span class="req">*</span></label><select id="newItemPrimaryUom" data-entity="uom"><option value="">Select Unit of Measurement</option></select></div>
          <div class="fld opt-field" data-field="secondary_uom"><label>Secondary UOM</label><select id="newItemSecondaryUom" data-entity="uom"><option value="">Select Secondary Unit</option></select></div>
          <label class="chk" style="grid-column:1/-1;"><input type="checkbox" id="newItemDescSameAsName"> Item Description Same as Item Name</label>
          <div class="fld" style="grid-column:1/-1;"><label>Item Description</label><input type="text" id="newItemDescription"></div>
        </div>

        <div class="sec-t">GST Details</div>
        <div class="fgrid c2">
          <div class="fld"><label>GST Rate <span class="req">*</span></label><select id="newItemGstRate"><option value="">Select GST Rate</option><?php foreach($gstRates as $r): ?><option value="<?php echo $r; ?>"><?php echo $r; ?>%</option><?php endforeach; ?></select></div>
          <div class="fld"><label>HSN Code</label><input type="text" id="newItemHsn" maxlength="8"></div>
          <div class="fld"><label class="sp">RCM</label><div class="sw f38"><span>RCM Available</span><label class="tg"><input type="checkbox" id="newItemRcmToggle"><i></i></label></div></div>
          <div class="fld opt-field" data-field="cess"><label>GST CESS Rate</label><select id="newItemCessRate"><option value="">None</option><?php foreach($cessRates as $r): ?><option value="<?php echo $r; ?>"><?php echo $r; ?>%</option><?php endforeach; ?></select></div>
          <div class="fld" style="grid-column:1/-1;"><label>HSN Code Details</label><input type="text" id="newItemHsnDesc" placeholder="Auto-filled from HSN code" readonly></div>
        </div>

        <div class="sec-t">Stock Details</div>
        <div class="fgrid c2">
          <div class="fld"><label>Opening Stock Date</label><input type="date" id="newItemOpeningDate"></div>
          <div class="fld opt-field" data-field="rate_decimal"><label>Decimal Place For Rate</label><input type="number" id="newItemDecimalRate" value="2" min="0" max="5"></div>
          <div class="fld"><label>Stock Quantity</label><input type="number" id="newItemStockQty" step="0.01" min="0" placeholder="0"></div>
          <div class="fld"><label>Stock Rate (Excluding GST)</label><input type="number" id="newItemStockRate" step="0.01" min="0" placeholder="0"></div>
          <div class="fld"><label>Stock Total Value</label><input type="text" id="newItemStockTotal" readonly value="0.00"></div>
          <div class="fld opt-field" data-field="reorder"><label>Re Order Level</label><input type="number" id="newItemReorderQty" step="0.01" min="0" placeholder="0"></div>
          <div class="fld opt-field" data-field="batch"><label>Batch Details</label><input type="text" id="newItemBatch"></div>
          <div class="fld opt-field" data-field="expiry"><label>Expiry Details</label><input type="text" id="newItemExpiry"></div>
          <div class="fld opt-field" data-field="barcode"><label>Bar Code</label><input type="text" id="newItemSku"></div>
          <div class="fld opt-field" data-field="negative"><label class="sp">Negative</label><div class="sw f38"><span>Negative Stock Allowed?</span><label class="tg"><input type="checkbox" id="newItemNegStock"><i></i></label></div></div>
        </div>
      </form>
    </div>
    <div class="modal-foot"><button type="button" class="btn btn-o" data-close="addItemModal">Cancel</button><button type="button" class="btn btn-p" id="saveItemBtn"><i class="fa-solid fa-check"></i> Save Item</button></div>
  </div>
</div>

<div class="modal-overlay mm-form" id="saleConfigModal">
  <div class="modal-box w6">
    <div class="modal-head"><span class="mh-ic"><i class="fa-solid fa-sliders"></i></span><div class="mh-txt"><h4>Sale Configuration</h4><p class="mh-sub">Choose which fields appear on the sale screen</p></div><button type="button" class="modal-close" data-close="saleConfigModal"><i class="fa-solid fa-xmark"></i></button></div>
    <div class="modal-body">
      <div class="cfg-sec">Header Configuration</div>
      <div class="fgrid c2" style="margin-bottom:10px;"><div class="fld"><label>Method of Voucher Number</label><select id="cfgVoucherMethod"><option value="automatic">Automatic</option><option value="manual">Manual</option></select></div></div><div class="cfg-list">
      <div class="sw"><span>Mobile Number</span><label class="tg"><input type="checkbox" id="cfgMobileNumber"><i></i></label></div>
      <div class="sw"><span>Credit Period Details</span><label class="tg"><input type="checkbox" id="cfgCreditPeriod"><i></i></label></div>
      <div class="sw"><span>Valid For (Days/Month)</span><label class="tg"><input type="checkbox" id="cfgValidFor"><i></i></label></div>
      <div class="sw"><span>Estimate / Quotation</span><label class="tg"><input type="checkbox" id="cfgEstimateQuotation"><i></i></label></div>
      <div class="sw"><span>Sale Order</span><label class="tg"><input type="checkbox" id="cfgSaleOrder"><i></i></label></div>
      <div class="sw"><span>Rubber Dealer Details</span><label class="tg"><input type="checkbox" id="cfgRubberDealer" checked><i></i></label></div>
      </div>

      <div class="cfg-sec">Item Configuration</div><div class="cfg-list">
      <div class="sw"><span>Price List (Price History)</span><label class="tg"><input type="checkbox" id="cfgPriceList" checked><i></i></label></div>
      <div class="sw"><span>Item Group</span><label class="tg"><input type="checkbox" id="cfgItemGroup"><i></i></label></div>
      <div class="sw"><span>Discount 1</span><label class="tg"><input type="checkbox" id="cfgDiscount1"><i></i></label></div>
      <div class="sw"><span>Discount 2</span><label class="tg"><input type="checkbox" id="cfgDiscount2"><i></i></label></div>
      <div class="sw"><span>Total Discount</span><label class="tg"><input type="checkbox" id="cfgTotalDiscount"><i></i></label></div>
      <div class="sw"><span>Item Description</span><label class="tg"><input type="checkbox" id="cfgItemDesc"><i></i></label></div>
      <div class="sw"><span>MRP</span><label class="tg"><input type="checkbox" id="cfgMrp"><i></i></label></div>
      <div class="sw"><span>Godown</span><label class="tg"><input type="checkbox" id="cfgGodown"><i></i></label></div>
      </div>

      <div class="cfg-sec">Footer Configuration</div>
      <div class="fgrid c2" style="margin-bottom:10px;"><div class="fld"><label>Round Off</label><select id="cfgRoundOffMethod"><option value="normal">Normal Rounding</option><option value="up">Always Round Up</option><option value="down">Always Round Down</option><option value="none">No Rounding</option></select></div></div><div class="cfg-list">
      <div class="sw"><span>Upload Document</span><label class="tg"><input type="checkbox" id="cfgUploadDocument" checked><i></i></label></div>
      <div class="sw"><span>Bank Details</span><label class="tg"><input type="checkbox" id="cfgBankDetails" checked><i></i></label></div>
      <div class="sw"><span>Terms &amp; Conditions</span><label class="tg"><input type="checkbox" id="cfgTerms"><i></i></label></div>
      <div class="sw"><span>Note</span><label class="tg"><input type="checkbox" id="cfgNote"><i></i></label></div>
      <div class="sw"><span>CESS</span><label class="tg"><input type="checkbox" id="cfgCess" checked><i></i></label></div>
      <div class="sw"><span>TCS</span><label class="tg"><input type="checkbox" id="cfgTcs"><i></i></label></div>
      <div class="sw"><span>TDS</span><label class="tg"><input type="checkbox" id="cfgTds"><i></i></label></div>
      </div>
    </div>
    <div class="modal-foot">
      <button type="button" class="btn-modal-save" data-close="saleConfigModal" id="applyConfigBtn"><i class="fa-solid fa-check"></i> Done</button>
    </div>
  </div>
</div>

<div class="modal-overlay" id="godownStockModal">
  <div class="modal-box godown-stock-modal">
    <div class="modal-head"><h4>Godown-Wise Stock</h4><button class="modal-close" data-close="godownStockModal">&times;</button></div>
    <div class="modal-body">
      <div class="gsl-item-name" id="gslItemName"></div>
      <div class="gsl-table-wrap">
        <table class="gsl-table">
          <thead>
            <tr>
              <th>Godown</th>
              <th>Available Qty</th>
              <th>Rate</th>
              <th>MRP</th>
              <th>Quantity To Add</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="gslTableBody"></tbody>
        </table>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn btn-outline" data-close="godownStockModal">Cancel</button>
    </div>
  </div>
</div>

<div class="modal-overlay" id="priceHistoryModal">
  <div class="modal-box wide price-history-modal">
    <div class="modal-head">
      <div class="ph-alltoggle">
        <span>All Customers</span>
        <label class="toggle"><input type="checkbox" id="phAllCustomers" checked><span></span></label>
      </div>
      <button class="modal-close" data-close="priceHistoryModal">&times;</button>
    </div>
    <div class="modal-body">
      <div class="ph-title" id="phTitle">PRICE HISTORY</div>
      <div class="ph-table-wrap">
        <table class="ph-table" id="phTable">
          <thead>
            <tr>
              <th>Sr No</th>
              <th>Invoice Number</th>
              <th>Date</th>
              <th>Qty</th>
              <th>MRP</th>
              <th>Unit Price
                <br>
                <select id="phPriceModeSelect">
                  <option value="without">Without Tax</option>
                  <option value="with">With Tax</option>
                </select>
              </th>
              <th>Discount 1</th>
              <th>Discount 2</th>
              <th>Net price per unit</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="phTableBody"></tbody>
        </table>
      </div>
    </div>
    <div class="modal-foot">
      <button class="btn btn-outline" data-close="priceHistoryModal">Close</button>
    </div>
  </div>
</div>

<script id="seedData" type="application/json"><?php echo json_encode($seed); ?></script>
<script id="companySeed" type="application/json"><?php echo json_encode(array('name'=>$company_name)); ?></script>
<script type="text/javascript">
var SEED = JSON.parse(document.getElementById('seedData') ? document.getElementById('seedData').textContent : '{}');
var COMPANY = JSON.parse(document.getElementById('companySeed') ? document.getElementById('companySeed').textContent : '{}');
var STATE_CODE_MAP = {
  '01':'Jammu and Kashmir','02':'Himachal Pradesh','03':'Punjab','04':'Chandigarh','05':'Uttarakhand',
  '06':'Haryana','07':'Delhi','08':'Rajasthan','09':'Uttar Pradesh','10':'Bihar','11':'Sikkim',
  '12':'Arunachal Pradesh','13':'Nagaland','14':'Manipur','15':'Mizoram','16':'Tripura','17':'Meghalaya',
  '18':'Assam','19':'West Bengal','20':'Jharkhand','21':'Odisha','22':'Chhattisgarh','23':'Madhya Pradesh',
  '24':'Gujarat','27':'Maharashtra','29':'Karnataka','30':'Goa','32':'Kerala','33':'Tamil Nadu',
  '36':'Telangana','37':'Andhra Pradesh'
};

(function seedItemStock(){
  var godownIds = SEED.godowns.map(function(g){ return g.id; });
  var demoStocks = [
    {gd1: {qty: 420, rate: 182, mrp: 210}, gd2: {qty: -15, rate: 184, mrp: 210}},
    {gd1: {qty: 65, rate: 140, mrp: 165}, gd2: {qty: 30, rate: 141, mrp: 165}},
    {gd1: {qty: -8, rate: 94, mrp: 110}, gd2: {qty: 12, rate: 95, mrp: 110}}
  ];
  SEED.items.forEach(function(it, idx){
    if(!it.stockByGodown){
      var demo = demoStocks[idx % demoStocks.length];
      it.stockByGodown = {};
      godownIds.forEach(function(gid){
        var s = demo[gid] || {qty: 0, rate: it.price, mrp: it.mrp};
        it.stockByGodown[gid] = {qty: s.qty, rate: s.rate, mrp: s.mrp};
      });
    }
    if(typeof it.totalStock === 'undefined'){
      var total = 0;
      Object.keys(it.stockByGodown).forEach(function(gid){ total += it.stockByGodown[gid].qty; });
      it.totalStock = total;
    }
  });
})();

var STATE = {
  targetSelect: null,
  targetRow: null,
  rowCounter: 0,
  chargeCounter: 0,
  addLessCounter: 0,
  openingStockCounter: 0,
  uploadedFiles: [],
  additionalImageFiles: [],
  invoiceMode: 'item',
  activeSearchRow: null,
  searchHighlightIndex: -1,
  searchMatches: [],
  addressFormScope: null,
  addressFormEditId: null,
  addressSelectScope: null,
  reopenAddressSelect: null,
  partySearchMatches: [],
  partySearchHighlight: -1,
  godownStockRow: null,
  godownStockItem: null,
  priceHistoryRow: null,
  priceHistoryItem: null,
  addressBooks: {
    dispatch: [{id:'dispatch_default', companyName: COMPANY.name || '', addr1:'Nil', addr2:'', place:'Manubazar Road', pincode:'799143', state:'Tripura', country:'India', gstin:'', selected:true}],
    billing: [],
    shipping: []
  }
};

function toast(message, icon){
  icon = icon || 'fa-circle-check';
  var stack = document.getElementById('toastStack');
  var el = document.createElement('div');
  el.className = 'toast';
  el.innerHTML = '<i class="fa-solid ' + icon + '"></i><span>' + message + '</span>';
  stack.appendChild(el);
  setTimeout(function(){ el.style.opacity = '0'; el.style.transform = 'translateX(20px)'; el.style.transition = '.3s'; }, 2600);
  setTimeout(function(){ if(el.parentNode){ stack.removeChild(el); } }, 3000);
}

function formatMoney(n){
  n = isNaN(n) ? 0 : n;
  return '\u20b9 ' + n.toLocaleString('en-IN', {minimumFractionDigits:2, maximumFractionDigits:2});
}

function escapeHtml(s){
  return String(s || '').replace(/[&<>"']/g, function(c){
    return ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'})[c];
  });
}

function closeAllDropdowns(except){
  document.querySelectorAll('.dropdown-panel.show').forEach(function(p){
    if(p !== except){ p.classList.remove('show'); }
  });
  closeGlobalSearch();
  closePartySearch();
}

function wireDropdown(btnId, panelId){
  var btn = document.getElementById(btnId);
  var panel = document.getElementById(panelId);
  if(!btn || !panel){ return; }
  btn.addEventListener('click', function(e){
    e.stopPropagation();
    var willShow = !panel.classList.contains('show');
    closeAllDropdowns();
    if(willShow){ panel.classList.add('show'); }
  });
}

function syncFixedBottom(){
  var sidebar = document.getElementById('sidebar');
  var fixedBottom = document.getElementById('fixedBottom');
  if(!sidebar || !fixedBottom){ return; }
  if(window.innerWidth <= 768){
    fixedBottom.style.left = '0';
  } else {
    fixedBottom.style.left = sidebar.classList.contains('collapsed') ? '64px' : '236px';
  }
}

function initHeader(){
  wireDropdown('notifBtn','notifPanel');
  wireDropdown('phoneBtn','phonePanel');
  wireDropdown('profileBtn','profilePanel');
  document.addEventListener('click', function(){ closeAllDropdowns(); });

  var mobileToggle = document.getElementById('mobileToggle');
  var sidebar = document.getElementById('sidebar');
  var overlay = document.getElementById('overlayBg');
  if(mobileToggle && sidebar){
    mobileToggle.addEventListener('click', function(){
      sidebar.classList.add('mobile-open');
      if(overlay){ overlay.classList.add('show'); }
    });
  }
  if(overlay && sidebar){
    overlay.addEventListener('click', function(){
      sidebar.classList.remove('mobile-open');
      overlay.classList.remove('show');
    });
  }

  var collapseBtn = document.getElementById('collapseBtn');
  var mainWrap = document.getElementById('mainWrap');
  if(collapseBtn && sidebar && mainWrap){
    collapseBtn.addEventListener('click', function(){
      sidebar.classList.toggle('collapsed');
      mainWrap.classList.toggle('collapsed');
      syncFixedBottom();
    });
  }
  window.addEventListener('resize', syncFixedBottom);
  syncFixedBottom();

  document.querySelectorAll('.toggle-sub').forEach(function(link){
    link.addEventListener('click', function(e){
      e.stopPropagation();
      var item = link.closest('.menu-item');
      var parentList = item.parentElement;
      var isOpen = item.classList.contains('open');
      parentList.querySelectorAll(':scope > .menu-item.open').forEach(function(sib){
        if(sib !== item){ sib.classList.remove('open'); }
      });
      item.classList.toggle('open', !isOpen);
    });
  });

  var companySwitch = document.getElementById('companySwitch');
  if(companySwitch){
    companySwitch.addEventListener('change', function(){
      toast('Switched to ' + companySwitch.value, 'fa-building');
    });
  }
  var fySwitch = document.getElementById('fySwitch');
  if(fySwitch){
    fySwitch.addEventListener('change', function(){
      toast('Financial year set to ' + fySwitch.value, 'fa-calendar');
    });
  }

  document.querySelectorAll('[data-nav]').forEach(function(btn){
    btn.addEventListener('click', function(){
      var target = btn.getAttribute('data-nav');
      if(window.location.pathname.indexOf(target) !== -1){
        toast('You are already on this screen', 'fa-circle-info');
        return;
      }
      window.location.href = target;
    });
  });

  var searchBtn = document.getElementById('searchBtn');
  if(searchBtn){
    searchBtn.addEventListener('click', function(){
      var q = window.prompt('Search transactions, parties or items');
      if(q){ toast('Searching for "' + q + '"', 'fa-magnifying-glass'); }
    });
  }

  var contactUs = document.getElementById('contactUsLink');
  if(contactUs){ contactUs.addEventListener('click', function(){ toast('Support: +91 9978478401', 'fa-headset'); }); }
  var submitQuery = document.getElementById('submitQueryLink');
  if(submitQuery){ submitQuery.addEventListener('click', function(){ toast('Suggestion form opened', 'fa-circle-question'); }); }
  var logoutOther = document.getElementById('logoutOtherDevices');
  if(logoutOther){
    logoutOther.addEventListener('click', function(){
      if(window.confirm('Logout from all other active devices?')){ toast('Logged out from other devices', 'fa-right-from-bracket'); }
    });
  }
  var signOut = document.getElementById('signOutLink');
  if(signOut){
    signOut.addEventListener('click', function(){
      if(window.confirm('Are you sure you want to sign out?')){ toast('Signed out', 'fa-right-from-bracket'); }
    });
  }

  var openChangePassword = document.getElementById('openChangePassword');
  if(openChangePassword){
    openChangePassword.addEventListener('click', function(){ openModal('changePasswordModal'); });
  }
  var savePasswordBtn = document.getElementById('savePasswordBtn');
  if(savePasswordBtn){
    savePasswordBtn.addEventListener('click', function(){
      var cur = document.getElementById('currentPassword').value;
      var nw = document.getElementById('newPassword').value;
      var cf = document.getElementById('confirmPassword').value;
      if(!cur || !nw || !cf){ toast('Please fill all password fields', 'fa-triangle-exclamation'); return; }
      if(nw.length < 6){ toast('New password must be at least 6 characters', 'fa-triangle-exclamation'); return; }
      if(nw !== cf){ toast('New password and confirm password do not match', 'fa-triangle-exclamation'); return; }
      document.getElementById('changePasswordForm').reset();
      closeModal('changePasswordModal');
      toast('Password changed successfully', 'fa-circle-check');
    });
  }

  var notifRefresh = document.getElementById('notifRefresh');
  if(notifRefresh){
    notifRefresh.addEventListener('click', function(){
      toast('Notifications refreshed', 'fa-arrows-rotate');
    });
  }
}

function openModal(id){
  var el = document.getElementById(id);
  if(el){ el.classList.add('show'); }
}
function closeModal(id){
  var el = document.getElementById(id);
  if(el){ el.classList.remove('show'); }
}

function initModals(){
  document.querySelectorAll('[data-modal]').forEach(function(btn){
    btn.addEventListener('click', function(){
      var modalId = btn.getAttribute('data-modal');
      var targetSel = btn.getAttribute('data-target');
      STATE.targetSelect = targetSel ? document.querySelector(targetSel) : null;
      STATE.targetRow = btn.closest('tr') || null;
      openModal(modalId);
    });
  });
  document.querySelectorAll('[data-close]').forEach(function(btn){
    btn.addEventListener('click', function(){
      closeModal(btn.getAttribute('data-close'));
    });
  });
  document.querySelectorAll('.modal-overlay').forEach(function(ov){
    ov.addEventListener('click', function(e){
      if(e.target === ov){ ov.classList.remove('show'); }
    });
  });
  document.querySelectorAll('.modal-subhead[data-collapse]').forEach(function(head){
    head.addEventListener('click', function(){
      var body = document.getElementById(head.getAttribute('data-collapse'));
      var collapsed = head.classList.toggle('collapsed');
      if(body){ body.classList.toggle('collapsed', collapsed); }
    });
  });
}

function appendOptionEverywhere(entity, value, text, extraData){
  var selects = document.querySelectorAll('[data-entity="' + entity + '"]');
  var focusEl = STATE.targetSelect && STATE.targetSelect.getAttribute('data-entity') === entity ? STATE.targetSelect : null;
  selects.forEach(function(sel){
    var opt = document.createElement('option');
    opt.value = value;
    opt.textContent = text;
    if(extraData){
      Object.keys(extraData).forEach(function(k){ opt.setAttribute('data-' + k, extraData[k]); });
    }
    sel.appendChild(opt);
    if(sel === focusEl || (!focusEl && sel === document.querySelector('[data-entity="' + entity + '"]'))){
      sel.value = value;
      sel.dispatchEvent(new Event('change'));
    }
  });
}

function buildUomOptions(selectEl, selectedId){
  var keepFirst = selectEl.querySelector('option[value=""]');
  selectEl.innerHTML = keepFirst ? keepFirst.outerHTML : '<option value="">Select UOM</option>';
  SEED.uoms.forEach(function(u){
    var opt = document.createElement('option');
    opt.value = u.id;
    opt.textContent = u.name;
    if(u.id === selectedId){ opt.selected = true; }
    selectEl.appendChild(opt);
  });
}
function buildLedgerOptions(selectEl, selectedId){
  selectEl.innerHTML = '<option value="">Select Ledger</option>';
  SEED.ledgers.forEach(function(l){
    var opt = document.createElement('option');
    opt.value = l.id;
    opt.textContent = l.name;
    if(l.id === selectedId){ opt.selected = true; }
    selectEl.appendChild(opt);
  });
}
function buildCategoryOptions(selectEl){
  selectEl.innerHTML = '';
  SEED.categories.forEach(function(c){
    var opt = document.createElement('option');
    opt.value = c.id;
    opt.textContent = c.name;
    selectEl.appendChild(opt);
  });
}
function buildItemGroupOptions(selectEl){
  selectEl.innerHTML = '<option value="">None</option>';
  SEED.categories.forEach(function(c){
    var opt = document.createElement('option');
    opt.value = c.id;
    opt.textContent = c.name;
    selectEl.appendChild(opt);
  });
}
function buildGstOptions(selectEl, selectedRate){
  selectEl.innerHTML = '';
  SEED.gstRates.forEach(function(r){
    var opt = document.createElement('option');
    opt.value = r;
    opt.textContent = r + '%';
    if(String(r) === String(selectedRate)){ opt.selected = true; }
    selectEl.appendChild(opt);
  });
}
function buildCessRateOptions(selectEl, selectedRate){
  selectEl.innerHTML = '';
  SEED.cessRates.forEach(function(r){
    var opt = document.createElement('option');
    opt.value = r;
    opt.textContent = r + '%';
    if(String(r) === String(selectedRate)){ opt.selected = true; }
    selectEl.appendChild(opt);
  });
}
function buildBankOptions(selectEl){
  selectEl.innerHTML = '<option value="">Select Bank</option>';
  SEED.banks.forEach(function(b){
    var opt = document.createElement('option');
    opt.value = b.id;
    opt.textContent = b.name;
    selectEl.appendChild(opt);
  });
}
function buildPartyGroupOptions(selectEl){
  selectEl.innerHTML = '';
  SEED.partyGroups.forEach(function(g){
    var opt = document.createElement('option');
    opt.value = g.id;
    opt.textContent = g.name;
    selectEl.appendChild(opt);
  });
}
function buildBrokerOptions(selectEl){
  var keepFirst = selectEl.querySelector('option[value=""]');
  selectEl.innerHTML = keepFirst ? keepFirst.outerHTML : '<option value="">Select Broker</option>';
  SEED.brokers.forEach(function(b){
    var opt = document.createElement('option');
    opt.value = b.id;
    opt.textContent = b.name;
    selectEl.appendChild(opt);
  });
}
function buildPriceListOptions(selectEl){
  var keepFirst = selectEl.querySelector('option[value=""]');
  selectEl.innerHTML = keepFirst ? keepFirst.outerHTML : '<option value="">Select Price List</option>';
  SEED.priceLists.forEach(function(pl){
    var opt = document.createElement('option');
    opt.value = pl.id;
    opt.textContent = pl.name;
    selectEl.appendChild(opt);
  });
}
function buildStateOptions(selectEl, selectedState){
  selectEl.innerHTML = '<option value="">Select state</option>';
  SEED.states.forEach(function(s){
    var opt = document.createElement('option');
    opt.value = s;
    opt.textContent = s;
    if(s === selectedState){ opt.selected = true; }
    selectEl.appendChild(opt);
  });
}
function buildTransporterOptions(selectEl){
  var keepFirst = selectEl.querySelector('option[value=""]');
  selectEl.innerHTML = keepFirst ? keepFirst.outerHTML : '<option value="">Select Transporter</option>';
  SEED.transporters.forEach(function(t){
    var opt = document.createElement('option');
    opt.value = t.id;
    opt.textContent = t.name;
    selectEl.appendChild(opt);
  });
}
function buildGodownOptions(selectEl, selectedId){
  var keepFirst = selectEl.querySelector('option[value=""]');
  selectEl.innerHTML = keepFirst ? keepFirst.outerHTML : '<option value="">Select Godown</option>';
  SEED.godowns.forEach(function(g){
    var opt = document.createElement('option');
    opt.value = g.id;
    opt.textContent = g.name;
    if(g.id === selectedId){ opt.selected = true; }
    selectEl.appendChild(opt);
  });
}

function populateStaticMasterSelects(){
  document.querySelectorAll('[data-entity="uom"]').forEach(function(sel){ buildUomOptions(sel); });
  document.querySelectorAll('[data-entity="category"]').forEach(function(sel){ buildCategoryOptions(sel); });
  document.querySelectorAll('[data-entity="ledger"]').forEach(function(sel){ buildLedgerOptions(sel); });
  document.querySelectorAll('[data-entity="partyGroup"]').forEach(function(sel){ buildPartyGroupOptions(sel); });
  document.querySelectorAll('[data-entity="broker"]').forEach(function(sel){ buildBrokerOptions(sel); });
  document.querySelectorAll('[data-entity="priceList"]').forEach(function(sel){ buildPriceListOptions(sel); });
  document.querySelectorAll('[data-entity="state"]').forEach(function(sel){ buildStateOptions(sel); });
  document.querySelectorAll('[data-entity="transporter"]').forEach(function(sel){ buildTransporterOptions(sel); });
  document.querySelectorAll('[data-entity="cessRate"]').forEach(function(sel){ buildCessRateOptions(sel, 0); });
  buildStateOptions(document.getElementById('addrFormState'), '');
}

function applyItemToRow(tr, it){
  tr.querySelector('.row-price').value = it.price;
  var uomSel = tr.querySelector('.js-uom-select');
  uomSel.value = it.uom || '';
  var gstSel = tr.querySelector('.row-gst');
  gstSel.value = it.gst || 0;
  tr.querySelector('.row-hsn').value = it.hsn || '';
  tr.querySelector('.row-sku').value = it.sku || '';
  tr.querySelector('.row-mrp').value = it.mrp || 0;
  tr.dataset.itemId = it.id;
  tr.dataset.itemName = it.name;
  tr.dataset.cessRate = it.cess || 0;
  recalcAll();
}

function isGodownEnabled(){
  var toggle = document.getElementById('cfgGodown');
  return toggle ? toggle.checked : false;
}

function openGodownStockModal(tr, it){
  STATE.godownStockRow = tr;
  STATE.godownStockItem = it;
  document.getElementById('gslItemName').textContent = it.name;
  var tbody = document.getElementById('gslTableBody');
  tbody.innerHTML = '';
  SEED.godowns.forEach(function(g){
    var stock = (it.stockByGodown && it.stockByGodown[g.id]) || {qty:0, rate:it.price, mrp:it.mrp};
    var qtyClass = stock.qty < 0 ? 'gsl-stock-neg' : 'gsl-stock-pos';
    var row = document.createElement('tr');
    row.innerHTML =
      '<td>' + escapeHtml(g.name) + '</td>' +
      '<td class="' + qtyClass + '">' + stock.qty + '</td>' +
      '<td>' + Number(stock.rate).toFixed(2) + '</td>' +
      '<td>' + Number(stock.mrp).toFixed(2) + '</td>' +
      '<td><input type="number" class="gsl-qty-input" value="0" min="0" step="0.01"></td>' +
      '<td><button type="button" class="gsl-pick-btn">Select</button></td>';
    var qtyInput = row.querySelector('.gsl-qty-input');
    row.querySelector('.gsl-pick-btn').addEventListener('click', function(){
      var qty = parseFloat(qtyInput.value) || 0;
      if(qty <= 0){ toast('Enter a quantity greater than zero', 'fa-triangle-exclamation'); return; }
      var targetTr = STATE.godownStockRow;
      if(targetTr){
        var godownSel = targetTr.querySelector('.row-godown');
        if(godownSel){ godownSel.value = g.id; }
        targetTr.querySelector('.row-qty').value = qty;
        targetTr.querySelector('.row-price').value = stock.rate;
        targetTr.querySelector('.row-mrp').value = stock.mrp;
      }
      closeModal('godownStockModal');
      recalcAll();
      toast('Quantity added from ' + g.name, 'fa-circle-check');
    });
    tbody.appendChild(row);
  });
  openModal('godownStockModal');
}

function isPriceListEnabled(){
  var toggle = document.getElementById('cfgPriceList');
  return toggle ? toggle.checked : false;
}

function getPriceHistoryEntries(item){
  var all = (SEED.priceHistory && SEED.priceHistory[item.id]) || [];
  var allCustomers = document.getElementById('phAllCustomers').checked;
  var partyId = document.getElementById('partySelect').value;
  if(allCustomers || !partyId){ return all; }
  return all.filter(function(e){ return e.party_id === partyId; });
}

function renderPriceHistoryTable(){
  var item = STATE.priceHistoryItem;
  if(!item){ return; }
  var mode = document.getElementById('phPriceModeSelect').value;
  var gst = parseFloat(item.gst) || 0;
  var entries = getPriceHistoryEntries(item);
  var tbody = document.getElementById('phTableBody');
  tbody.innerHTML = '';
  if(entries.length === 0){
    tbody.innerHTML = '<tr class="ph-empty-row"><td colspan="10">No price history found for this item</td></tr>';
    return;
  }
  entries.forEach(function(entry, idx){
    var basePrice = mode === 'with' ? (entry.price * (1 + gst / 100)) : entry.price;
    var netPrice = Math.max(basePrice - (entry.disc1 || 0) - (entry.disc2 || 0), 0);
    var row = document.createElement('tr');
    row.innerHTML =
      '<td>' + (idx + 1) + '</td>' +
      '<td>' + escapeHtml(entry.invoice) + '</td>' +
      '<td>' + escapeHtml(entry.date) + '</td>' +
      '<td>' + entry.qty + '</td>' +
      '<td>\u20b9 ' + Number(entry.mrp || 0).toFixed(2) + '</td>' +
      '<td>\u20b9 ' + basePrice.toFixed(2) + '</td>' +
      '<td>\u20b9 ' + Number(entry.disc1 || 0).toFixed(2) + '</td>' +
      '<td>\u20b9 ' + Number(entry.disc2 || 0).toFixed(2) + '</td>' +
      '<td>\u20b9 ' + netPrice.toFixed(2) + '</td>' +
      '<td><button type="button" class="ph-pick-link">Pick</button></td>';
    row.querySelector('.ph-pick-link').addEventListener('click', function(){
      pickPriceHistoryEntry(entry, basePrice);
    });
    tbody.appendChild(row);
  });
}

function pickPriceHistoryEntry(entry, basePrice){
  var tr = STATE.priceHistoryRow;
  if(!tr){ return; }
  tr.querySelector('.row-qty').value = entry.qty;
  tr.querySelector('.row-price').value = basePrice.toFixed(2);
  if(entry.mrp){ tr.querySelector('.row-mrp').value = entry.mrp; }
  tr.querySelector('.row-disc1-type').value = 'flat';
  tr.querySelector('.row-disc1-val').value = entry.disc1 || 0;
  tr.querySelector('.row-disc2-type').value = 'flat';
  tr.querySelector('.row-disc2-val').value = entry.disc2 || 0;
  closeModal('priceHistoryModal');
  recalcAll();
  toast('Price applied from ' + entry.invoice, 'fa-circle-check');
}

function openPriceHistoryModal(tr, item){
  STATE.priceHistoryRow = tr;
  STATE.priceHistoryItem = item;
  document.getElementById('phTitle').textContent = 'PRICE HISTORY - ' + item.name;
  renderPriceHistoryTable();
  openModal('priceHistoryModal');
}

function initPriceHistory(){
  document.getElementById('phAllCustomers').addEventListener('change', renderPriceHistoryTable);
  document.getElementById('phPriceModeSelect').addEventListener('change', renderPriceHistoryTable);
}

function closeGlobalSearch(){
  var panel = document.getElementById('globalSearchResults');
  panel.classList.remove('show');
  STATE.activeSearchRow = null;
  STATE.searchMatches = [];
  STATE.searchHighlightIndex = -1;
}

function positionGlobalSearch(inputEl){
  var panel = document.getElementById('globalSearchResults');
  var rect = inputEl.getBoundingClientRect();
  panel.style.left = rect.left + 'px';
  panel.style.top = (rect.bottom + 2) + 'px';
  var minW = Math.max(rect.width, 240);
  panel.style.width = minW + 'px';
}

function renderGlobalSearchMatches(){
  var panel = document.getElementById('globalSearchResults');
  panel.innerHTML = '';
  if(STATE.searchMatches.length === 0){
    panel.innerHTML = '<div class="isr-empty">No ' + (STATE.invoiceMode === 'accounting' ? 'ledgers' : 'items') + ' found</div>';
  } else {
    STATE.searchMatches.forEach(function(entry, idx){
      var div = document.createElement('div');
      div.className = 'isr' + (idx === STATE.searchHighlightIndex ? ' active' : '');
      if(STATE.invoiceMode === 'accounting'){
        div.innerHTML = '<span class="name">' + entry.name + '</span><span class="meta">Ledger</span>';
      } else {
        var stockVal = typeof entry.totalStock === 'number' ? entry.totalStock : 0;
        var stockClass = stockVal < 0 ? 'stock-neg' : 'stock-pos';
        div.innerHTML = '<span class="name">' + entry.name + '</span><span class="meta">\u20b9 ' + Number(entry.price).toFixed(2) + ' &middot; ' + entry.gst + '% GST &middot; <span class="' + stockClass + '">Stock: ' + stockVal + '</span></span>';
      }
      div.addEventListener('mousedown', function(e){
        e.preventDefault();
        selectSearchMatch(entry);
      });
      panel.appendChild(div);
    });
  }
  panel.classList.add('show');
}

function selectSearchMatch(entry){
  var row = STATE.activeSearchRow;
  if(!row){ return; }
  if(STATE.invoiceMode === 'accounting'){
    row.querySelector('.js-item-search').value = entry.name;
    row.dataset.itemId = entry.id;
    row.dataset.itemName = entry.name;
    closeGlobalSearch();
    return;
  }
  applyItemToRow(row, entry);
  row.querySelector('.js-item-search').value = entry.name;
  closeGlobalSearch();
  if(isGodownEnabled()){
    openGodownStockModal(row, entry);
  }
}

function runGlobalSearch(row, query){
  STATE.activeSearchRow = row;
  var q = (query || '').trim().toLowerCase();
  var source = STATE.invoiceMode === 'accounting' ? SEED.ledgers : SEED.items;
  STATE.searchMatches = source.filter(function(entry){
    if(!q){ return true; }
    return entry.name.toLowerCase().indexOf(q) !== -1;
  }).slice(0, 8);
  STATE.searchHighlightIndex = STATE.searchMatches.length ? 0 : -1;
  positionGlobalSearch(row.querySelector('.js-item-search'));
  renderGlobalSearchMatches();
}

function moveSearchHighlight(delta){
  if(STATE.searchMatches.length === 0){ return; }
  STATE.searchHighlightIndex = (STATE.searchHighlightIndex + delta + STATE.searchMatches.length) % STATE.searchMatches.length;
  renderGlobalSearchMatches();
}

function confirmSearchHighlight(){
  if(STATE.searchHighlightIndex >= 0 && STATE.searchMatches[STATE.searchHighlightIndex]){
    selectSearchMatch(STATE.searchMatches[STATE.searchHighlightIndex]);
  }
}

function extractStateFromAddress(addr){
  if(!addr){ return ''; }
  var parts = addr.split(',').map(function(p){ return p.trim(); });
  for(var i=0;i<parts.length;i++){
    for(var j=0;j<SEED.states.length;j++){
      if(parts[i].toLowerCase() === SEED.states[j].toLowerCase()){ return SEED.states[j]; }
    }
  }
  return '';
}

function closePartySearch(){
  var panel = document.getElementById('partySearchResults');
  panel.classList.remove('show');
  STATE.partySearchMatches = [];
  STATE.partySearchHighlight = -1;
}

function positionPartySearch(){
  var panel = document.getElementById('partySearchResults');
  var input = document.getElementById('partySearchInput');
  var rect = input.getBoundingClientRect();
  panel.style.left = rect.left + 'px';
  panel.style.top = (rect.bottom + 2) + 'px';
  panel.style.width = Math.max(rect.width, 260) + 'px';
}

function renderPartySearchResults(){
  var panel = document.getElementById('partySearchResults');
  panel.innerHTML = '';
  if(STATE.partySearchMatches.length === 0){
    panel.innerHTML = '<div class="psr-empty">No parties found</div>';
  } else {
    STATE.partySearchMatches.forEach(function(p, idx){
      var state = extractStateFromAddress(p.address);
      var contact = p.mobile || '-';
      var div = document.createElement('div');
      div.className = 'psr' + (idx === STATE.partySearchHighlight ? ' active' : '');
      div.innerHTML =
        '<div class="psr-line1">' + escapeHtml(p.name) + ' - ' + escapeHtml(contact) + (state ? ' <span class="psr-state">(' + escapeHtml(state) + ')</span>' : '') + '</div>' +
        (p.gstin ? '<div class="psr-line2">[' + escapeHtml(p.gstin) + ']</div>' : '');
      div.addEventListener('mousedown', function(e){
        e.preventDefault();
        selectParty(p);
      });
      panel.appendChild(div);
    });
  }
  panel.classList.add('show');
}

function runPartySearch(query){
  var q = (query || '').trim().toLowerCase();
  STATE.partySearchMatches = SEED.parties.filter(function(p){
    if(!q){ return true; }
    return p.name.toLowerCase().indexOf(q) !== -1;
  }).slice(0, 8);
  STATE.partySearchHighlight = STATE.partySearchMatches.length ? 0 : -1;
  positionPartySearch();
  renderPartySearchResults();
}

function movePartyHighlight(delta){
  if(STATE.partySearchMatches.length === 0){ return; }
  STATE.partySearchHighlight = (STATE.partySearchHighlight + delta + STATE.partySearchMatches.length) % STATE.partySearchMatches.length;
  renderPartySearchResults();
}

function confirmPartyHighlight(){
  if(STATE.partySearchHighlight >= 0 && STATE.partySearchMatches[STATE.partySearchHighlight]){
    selectParty(STATE.partySearchMatches[STATE.partySearchHighlight]);
  }
}

function getPartyInvoices(partyId){
  return (SEED.invoices || []).filter(function(inv){ return String(inv.party_id) === String(partyId); });
}

function calculateSeedInvoiceTotal(inv){
  var total = 0;
  (inv.items || []).forEach(function(line){
    var item = (SEED.items || []).filter(function(x){ return String(x.id) === String(line.item_id); })[0];
    var price = parseFloat(line.price);
    if(isNaN(price)){ price = item ? (parseFloat(item.price) || 0) : 0; }
    var qty = parseFloat(line.qty) || 0;
    var taxable = qty * price;
    var gst = item ? (parseFloat(item.gst) || 0) : 0;
    var cess = item ? (parseFloat(item.cess) || 0) : 0;
    total += taxable + taxable * gst / 100 + taxable * cess / 100;
  });
  return total;
}

function buildCreditInvoiceOptions(partyId, selectedNumber){
  var row = document.getElementById('creditInvoiceReferenceRow');
  var select = document.getElementById('creditInvoiceNumber');
  var totalInput = document.getElementById('creditInvoiceTotalAmount');
  var dateInput = document.getElementById('creditInvoiceDate');
  if(!row || !select){ return; }
  var invoices = getPartyInvoices(partyId);
  select.innerHTML = '<option value="">Select Invoice</option>';
  invoices.forEach(function(inv){
    var option = document.createElement('option');
    option.value = inv.number;
    option.textContent = inv.number;
    option.dataset.invoiceId = inv.id;
    select.appendChild(option);
  });
  row.style.display = partyId ? 'flex' : 'none';
  row.classList.toggle('show', !!partyId);
  if(selectedNumber){ select.value = selectedNumber; }
  var selected = invoices.filter(function(inv){ return String(inv.number) === String(select.value); })[0];
  if(selected){
    totalInput.value = formatMoney(calculateSeedInvoiceTotal(selected));
    dateInput.value = selected.date || '';
  } else {
    totalInput.value = formatMoney(0);
    dateInput.value = '';
  }
}

function findPartyInvoice(number, partyId){
  return (SEED.invoices || []).filter(function(inv){
    return String(inv.number) === String(number) && String(inv.party_id) === String(partyId);
  })[0];
}

function loadInvoiceIntoCreditNote(inv){
  if(!inv){ return; }
  var party = (SEED.parties || []).filter(function(p){ return String(p.id) === String(inv.party_id); })[0];
  if(party){ selectParty(party, inv.number); }
  var invoiceSelect = document.getElementById('creditInvoiceNumber');
  if(invoiceSelect){ invoiceSelect.value = inv.number; }
  var totalInput = document.getElementById('creditInvoiceTotalAmount');
  var dateInput = document.getElementById('creditInvoiceDate');
  if(totalInput){ totalInput.value = formatMoney(calculateSeedInvoiceTotal(inv)); }
  if(dateInput){ dateInput.value = inv.date || ''; }
  document.getElementById('itemTableBody').innerHTML = '';
  (inv.items || []).forEach(function(line){
    var item = (SEED.items || []).filter(function(x){ return String(x.id) === String(line.item_id); })[0];
    var tr = addItemRow();
    if(item){
      var search = tr.querySelector('.js-item-search');
      if(search){ search.value = item.name; }
      applyItemToRow(tr, item);
    }
    var qty = tr.querySelector('.row-qty');
    var price = tr.querySelector('.row-price');
    if(qty){ qty.value = line.qty || 0; }
    if(price){ price.value = line.price || 0; }
  });
  if(inv.terms && document.getElementById('termsSection')){
    var termsCfg = document.getElementById('cfgTerms');
    if(termsCfg){ termsCfg.checked = true; }
    document.getElementById('termsSection').style.display = '';
    document.getElementById('termsText').value = inv.terms;
  }
  recalcAll();
  toast('Invoice ' + inv.number + ' details loaded', 'fa-file-invoice');
}

function initCreditInvoiceReference(){
  var select = document.getElementById('creditInvoiceNumber');
  if(!select){ return; }
  select.addEventListener('change', function(){
    var partyId = document.getElementById('partySelect').value;
    var inv = findPartyInvoice(this.value, partyId);
    if(inv){
      loadInvoiceIntoCreditNote(inv);
    } else {
      document.getElementById('creditInvoiceTotalAmount').value = formatMoney(0);
      document.getElementById('creditInvoiceDate').value = '';
    }
  });
}

function selectParty(p, invoiceNumber){
  document.getElementById('partySelect').value = p.id;
  document.getElementById('partySearchInput').value = p.name;
  document.getElementById('partyGstin').value = p.gstin || '';
  var mobileField = document.getElementById('invoiceMobileNumber');
  if(mobileField){ mobileField.value = p.mobile || ''; }
  if(p.address){
    var data = {id:'billing_party', companyName: p.name, addr1: p.address, addr2:'', place:'', pincode:'', state:'', country:'India', gstin: p.gstin || '', selected:true};
    STATE.addressBooks.billing = [data];
    STATE.addressBooks.shipping = [];
    renderSelectedAddr('billing');
    syncShipSameAsBilling();
  }
  closePartySearch();
  buildCreditInvoiceOptions(p.id, invoiceNumber || '');
  recalcAll();
}

function initPartySearch(){
  var input = document.getElementById('partySearchInput');
  input.addEventListener('focus', function(){ runPartySearch(input.value); });
  input.addEventListener('input', function(){
    document.getElementById('partySelect').value = '';
    buildCreditInvoiceOptions('', '');
    STATE.addressBooks.billing = [];
    STATE.addressBooks.shipping = [];
    renderSelectedAddr('billing');
    renderSelectedAddr('shipping');
    runPartySearch(input.value);
  });
  input.addEventListener('click', function(e){ e.stopPropagation(); });
  input.addEventListener('keydown', function(e){
    if(e.key === 'ArrowDown'){ e.preventDefault(); movePartyHighlight(1); }
    else if(e.key === 'ArrowUp'){ e.preventDefault(); movePartyHighlight(-1); }
    else if(e.key === 'Enter'){ e.preventDefault(); confirmPartyHighlight(); }
    else if(e.key === 'Escape'){ closePartySearch(); }
  });
  input.addEventListener('blur', function(){
    setTimeout(function(){ closePartySearch(); }, 150);
  });
  window.addEventListener('scroll', function(){
    if(document.getElementById('partySearchResults').classList.contains('show')){ positionPartySearch(); }
  }, true);
  window.addEventListener('resize', function(){
    if(document.getElementById('partySearchResults').classList.contains('show')){ positionPartySearch(); }
  });
}

function mockGstinLookup(gstin){
  var code = gstin.substring(0,2);
  var state = STATE_CODE_MAP[code] || 'West Bengal';
  return {
    company: 'Verified Business (' + gstin + ')',
    addr1: 'Registered Office, ' + state,
    place: state + ' City',
    state: state,
    pincode: '000000'
  };
}

function fetchGstinInto(gstinInputId, targets){
  var gstinInput = document.getElementById(gstinInputId);
  var gstin = gstinInput ? gstinInput.value.trim() : '';
  if(!gstin || gstin.length < 15){ toast('Enter a valid 15 character GSTIN', 'fa-triangle-exclamation'); return; }
  toast('Fetching GSTIN details...', 'fa-magnifying-glass');
  var data = mockGstinLookup(gstin);
  setTimeout(function(){
    if(targets.company){ document.getElementById(targets.company).value = data.company; }
    if(targets.addr1){ document.getElementById(targets.addr1).value = data.addr1; }
    if(targets.place){ document.getElementById(targets.place).value = data.place; }
    if(targets.state){ buildStateOptions(document.getElementById(targets.state), data.state); }
    if(targets.pincode){ document.getElementById(targets.pincode).value = data.pincode; }
    toast('GSTIN details fetched successfully', 'fa-circle-check');
  }, 500);
}

function initGstinFetch(){
  var addressBtn = document.getElementById('fetchGstinAddressBtn');
  if(addressBtn){
    addressBtn.addEventListener('click', function(){
      fetchGstinInto('addrFormGstin', {company:'addrFormCompany', addr1:'addrFormLine1', place:'addrFormCity', state:'addrFormState', pincode:'addrFormPincode'});
    });
  }
  var addrPartyBtn = document.getElementById('fetchGstinAddrPartyBtn');
  if(addrPartyBtn){
    addrPartyBtn.addEventListener('click', function(){
      fetchGstinInto('addrPGstPan', {company:'addrPLegal', addr1:'addrPLine1', place:'addrPPlace', state:'addrPState', pincode:'addrPPincode'});
    });
  }
  var partyBtn = document.getElementById('fetchGstinPartyBtn');
  if(partyBtn){
    partyBtn.addEventListener('click', function(){
      fetchGstinInto('newPartyGstin', {company:'newPartyName', addr1:'newPartyAddr1', place:'newPartyPlace', state:'newPartyState', pincode:'newPartyPincode'});
    });
  }
  var transporterBtn = document.getElementById('fetchGstinTransporterBtn');
  if(transporterBtn){
    transporterBtn.addEventListener('click', function(){
      fetchGstinInto('newTransporterGstin', {addr1:'newTransporterAddr1', state:'newTransporterState', pincode:'newTransporterPincode'});
    });
  }
}

function addItemRow(){
  STATE.rowCounter++;
  var tbody = document.getElementById('itemTableBody');
  var tr = document.createElement('tr');
  tr.className = 'item-row';
  tr.dataset.cessRate = 0;
  tr.innerHTML =
    '<td class="col-sr num" data-label="Sr No.">' + (tbody.children.length + 1) + '</td>' +
    '<td class="col-item" data-label="Item Name">' +
      '<div class="field-with-icon item-search-wrap" style="position:relative;">' +
        '<input type="text" class="js-item-search" placeholder="Search item..." autocomplete="off">' +
        '<button type="button" class="item-search-icon-btn js-price-history" title="Price History"><i class="fa-solid fa-clock-rotate-left"></i></button>' +
        '<button type="button" class="item-search-icon-btn js-add-item" data-modal="addItemModal" title="Add Item"><i class="fa-solid fa-plus"></i></button>' +
      '</div>' +
      '<div class="item-name-desc"><input type="text" class="row-itemdesc" placeholder="Item description"></div>' +
    '</td>' +
    '<td class="col-itemgroup" data-label="Item Group"><select class="row-itemgroup"></select></td>' +
    '<td class="col-sku" data-label="SKU"><input type="text" class="row-sku"></td>' +
    '<td class="col-hsn" data-label="HSN / SAC Code"><input type="text" class="row-hsn" maxlength="8"></td>' +
    '<td class="col-godown" data-label="Godown"><select class="row-godown"></select></td>' +
    '<td class="col-uom" data-label="UOM"><select class="js-uom-select" data-entity="uom"></select></td>' +
    '<td class="num col-qty" data-label="Quantity"><input type="number" class="row-qty" value="1" min="0" step="0.01"></td>' +
    '<td class="num col-mrp" data-label="MRP"><input type="number" class="row-mrp" value="0" min="0" step="0.01"></td>' +
    '<td class="num col-price" data-label="Unit Price"><input type="number" class="row-price" value="0" min="0" step="0.01"></td>' +
    '<td class="col-gst" data-label="Tax Rate"><select class="row-gst"></select></td>' +
    '<td class="col-discount1" data-label="Discount 1">' +
      '<div class="discount-cell">' +
        '<select class="row-disc1-type"><option value="flat">\u20b9</option><option value="pct">%</option></select>' +
        '<input type="number" class="row-disc1-val" value="0" min="0" step="0.01">' +
      '</div>' +
    '</td>' +
    '<td class="col-discount2" data-label="Discount 2">' +
      '<div class="discount-cell">' +
        '<select class="row-disc2-type"><option value="flat">\u20b9</option><option value="pct">%</option></select>' +
        '<input type="number" class="row-disc2-val" value="0" min="0" step="0.01">' +
      '</div>' +
    '</td>' +
    '<td class="num readonly-cell col-totaldiscount row-totaldiscount" data-label="Total Discount">0.00</td>' +
    '<td class="num readonly-cell col-taxable row-taxable" data-label="Taxable Amount">0.00</td>' +
    '<td class="num readonly-cell col-tax row-tax" data-label="Total Tax">0.00</td>' +
    '<td class="num readonly-cell col-cess row-cess" data-label="Total CESS">0.00</td>' +
    '<td class="num readonly-cell col-total row-total" data-label="Total Item Value">0.00</td>' +
    '<td class="col-action" data-label="Action"><button type="button" class="row-delete"><i class="fa-solid fa-trash"></i></button></td>';
  tbody.appendChild(tr);
  buildUomOptions(tr.querySelector('.js-uom-select'));
  buildGstOptions(tr.querySelector('.row-gst'), 0);
  buildGodownOptions(tr.querySelector('.row-godown'));
  buildItemGroupOptions(tr.querySelector('.row-itemgroup'));

  var searchInput = tr.querySelector('.js-item-search');
  searchInput.addEventListener('focus', function(){
    runGlobalSearch(tr, searchInput.value);
  });
  searchInput.addEventListener('input', function(){
    runGlobalSearch(tr, searchInput.value);
  });
  searchInput.addEventListener('click', function(e){ e.stopPropagation(); });
  searchInput.addEventListener('keydown', function(e){
    if(e.key === 'ArrowDown'){ e.preventDefault(); moveSearchHighlight(1); }
    else if(e.key === 'ArrowUp'){ e.preventDefault(); moveSearchHighlight(-1); }
    else if(e.key === 'Enter'){ e.preventDefault(); confirmSearchHighlight(); }
    else if(e.key === 'Escape'){ closeGlobalSearch(); }
  });
  searchInput.addEventListener('blur', function(){
    setTimeout(function(){ closeGlobalSearch(); }, 150);
  });

  tr.querySelector('.js-add-item').addEventListener('click', function(e){
    e.stopPropagation();
    STATE.targetRow = tr;
    openModal('addItemModal');
  });

  tr.querySelector('.js-price-history').addEventListener('click', function(e){
    e.stopPropagation();
    if(!tr.dataset.itemId){ toast('Search and select an item first', 'fa-triangle-exclamation'); return; }
    var it = SEED.items.filter(function(x){ return x.id === tr.dataset.itemId; })[0];
    if(!it){ toast('Item details not found', 'fa-triangle-exclamation'); return; }
    openPriceHistoryModal(tr, it);
  });

  tr.querySelectorAll('.row-qty, .row-price, .row-disc1-type, .row-disc1-val, .row-disc2-type, .row-disc2-val, .row-gst, .js-uom-select').forEach(function(el){
    el.addEventListener('input', recalcAll);
    el.addEventListener('change', recalcAll);
  });
  tr.querySelector('.row-delete').addEventListener('click', function(){
    tr.remove();
    renumberRows();
    recalcAll();
  });
  renumberRows();
  recalcAll();
  return tr;
}

function renumberRows(){
  document.querySelectorAll('#itemTableBody .item-row').forEach(function(tr, idx){
    tr.querySelector('.col-sr').textContent = idx + 1;
  });
}

function recalcRow(tr){
  var mode = document.getElementById('unitPriceMode').value;
  var qty = parseFloat(tr.querySelector('.row-qty').value) || 0;
  var price = parseFloat(tr.querySelector('.row-price').value) || 0;
  var disc1Type = tr.querySelector('.row-disc1-type').value;
  var disc1Val = parseFloat(tr.querySelector('.row-disc1-val').value) || 0;
  var disc2Type = tr.querySelector('.row-disc2-type').value;
  var disc2Val = parseFloat(tr.querySelector('.row-disc2-val').value) || 0;
  var gstRate = parseFloat(tr.querySelector('.row-gst').value) || 0;
  var cessRate = parseFloat(tr.dataset.cessRate) || 0;
  var gross = qty * price;
  var taxableGross = mode === 'with' ? (gross / (1 + gstRate / 100)) : gross;
  var disc1Amt = disc1Type === 'pct' ? (taxableGross * disc1Val / 100) : disc1Val;
  var afterDisc1 = Math.max(taxableGross - disc1Amt, 0);
  var disc2Amt = disc2Type === 'pct' ? (afterDisc1 * disc2Val / 100) : disc2Val;
  var taxable = Math.max(afterDisc1 - disc2Amt, 0);
  var totalDiscount = disc1Amt + disc2Amt;
  var gstAmt = taxable * gstRate / 100;
  var cessAmt = taxable * cessRate / 100;
  var total = taxable + gstAmt + cessAmt;
  tr.dataset.qty = qty;
  tr.dataset.taxable = taxable;
  tr.dataset.gst = gstAmt;
  tr.dataset.cessAmt = cessAmt;
  tr.dataset.total = total;
  tr.querySelector('.row-totaldiscount').textContent = totalDiscount.toFixed(2);
  tr.querySelector('.row-taxable').textContent = taxable.toFixed(2);
  tr.querySelector('.row-tax').textContent = gstAmt.toFixed(2);
  tr.querySelector('.row-cess').textContent = cessAmt.toFixed(2);
  tr.querySelector('.row-total').textContent = total.toFixed(2);
  return {qty:qty, taxable:taxable, gst:gstAmt, cess:cessAmt, total:total};
}

function recalcAll(){
  var taxableSum = 0, gstSum = 0, qtySum = 0, cessLineSum = 0, itemTotalSum = 0;
  document.querySelectorAll('#itemTableBody .item-row').forEach(function(tr){
    var r = recalcRow(tr);
    taxableSum += r.taxable;
    gstSum += r.gst;
    qtySum += r.qty;
    cessLineSum += r.cess;
    itemTotalSum += r.total;
  });
  document.getElementById('footQty').textContent = qtySum.toFixed(2);
  document.getElementById('footTaxable').textContent = taxableSum.toFixed(2);
  document.getElementById('footTax').textContent = gstSum.toFixed(2);
  document.getElementById('footCess').textContent = cessLineSum.toFixed(2);
  document.getElementById('footTotal').textContent = itemTotalSum.toFixed(2);
  var cgst = gstSum / 2;
  var sgst = gstSum / 2;
  var igst = 0;
  var cess = (parseFloat(document.getElementById('cessInput').value) || 0) + cessLineSum;
  var chargesTotal = 0;
  document.querySelectorAll('#additionalChargesRows .charge-row').forEach(function(row){
    chargesTotal += computeChargeRow(row);
  });
  document.getElementById('sumCharges').textContent = formatMoney(chargesTotal);
  var addLessTotal = 0;
  var assessableAdjust = 0;
  document.querySelectorAll('#addLessRows .addless-row').forEach(function(row){
    var res = computeAddLessRow(row);
    addLessTotal += res.signedAmount;
    if(res.includeAssessable){ assessableAdjust += res.signedAmount; }
  });
  document.getElementById('sumAddLess').textContent = formatMoney(addLessTotal);
  var displayedTaxable = taxableSum + assessableAdjust;
  document.getElementById('sumTaxable').textContent = formatMoney(displayedTaxable);
  document.getElementById('sumCgst').textContent = formatMoney(cgst);
  document.getElementById('sumSgst').textContent = formatMoney(sgst);
  document.getElementById('sumIgst').textContent = formatMoney(igst);
  var tcsPct = document.getElementById('cfgTcs').checked ? (parseFloat(document.getElementById('tcsPctInput').value) || 0) : 0;
  var tdsPct = document.getElementById('cfgTds').checked ? (parseFloat(document.getElementById('tdsPctInput').value) || 0) : 0;
  var tcsAmt = displayedTaxable * tcsPct / 100;
  var tdsAmt = displayedTaxable * tdsPct / 100;
  document.getElementById('tcsAmountInput').value = tcsAmt.toFixed(2);
  document.getElementById('tdsAmountInput').value = tdsAmt.toFixed(2);
  var preRound = displayedTaxable + cgst + sgst + igst + cess + chargesTotal + addLessTotal + tcsAmt - tdsAmt;
  var roundMethod = document.getElementById('cfgRoundOffMethod').value;
  var roundOffInput = document.getElementById('roundOffInput');
  if(roundMethod === 'normal'){
    roundOffInput.value = (Math.round(preRound) - preRound).toFixed(2);
  } else if(roundMethod === 'up'){
    roundOffInput.value = (Math.ceil(preRound) - preRound).toFixed(2);
  } else if(roundMethod === 'down'){
    roundOffInput.value = (Math.floor(preRound) - preRound).toFixed(2);
  } else if(roundMethod === 'none'){
    roundOffInput.value = '0.00';
  }
  var roundOff = parseFloat(roundOffInput.value) || 0;
  var grand = preRound + roundOff;
  document.getElementById('sumGrand').textContent = formatMoney(grand);
}

function computeChargeRow(row){
  if(!row.querySelector('.charge-amount')){ return 0; }
  var amount = parseFloat(row.querySelector('.charge-amount').value) || 0;
  var discType = row.querySelector('.charge-disc-type').value;
  var discVal = parseFloat(row.querySelector('.charge-disc-val').value) || 0;
  var gstPct = parseFloat(row.querySelector('.charge-gst').value) || 0;
  var afterDisc = amount - (discType === 'pct' ? amount * discVal / 100 : discVal);
  var withGst = afterDisc + afterDisc * gstPct / 100;
  row.querySelector('.charge-total').textContent = withGst.toFixed(2);
  return withGst;
}

function computeAddLessRow(row){
  if(!row.querySelector('.addless-amount')){ return {signedAmount:0, includeAssessable:false}; }
  var amount = parseFloat(row.querySelector('.addless-amount').value) || 0;
  var sign = row.querySelector('.addless-sign').value;
  var includeAssessable = row.querySelector('.addless-include').checked;
  var signedAmount = sign === 'less' ? -amount : amount;
  row.querySelector('.addless-total').textContent = signedAmount.toFixed(2);
  return {signedAmount: signedAmount, includeAssessable: includeAssessable};
}

function addChargeRow(){
  STATE.chargeCounter++;
  var wrap = document.getElementById('additionalChargesRows');
  var row = document.createElement('div');
  row.className = 'charge-row';
  row.innerHTML =
    '<select class="charge-ledger" data-entity="ledger"></select>' +
    '<button type="button" class="icon-add-inline" data-modal="addLedgerModal"><i class="fa-solid fa-plus"></i></button>' +
    '<select class="charge-disc-type"><option value="flat">\u20b9</option><option value="pct">%</option></select>' +
    '<input type="number" class="charge-disc-val" value="0" step="0.01" placeholder="Disc.">' +
    '<input type="number" class="charge-amount" value="0" step="0.01" placeholder="Amount">' +
    '<select class="charge-gst"></select>' +
    '<span class="charge-total">0.00</span>' +
    '<button type="button" class="icon-remove-inline"><i class="fa-solid fa-xmark"></i></button>';
  wrap.appendChild(row);
  buildLedgerOptions(row.querySelector('.charge-ledger'));
  buildGstOptions(row.querySelector('.charge-gst'), 0);
  row.querySelectorAll('input, select').forEach(function(el){
    el.addEventListener('input', recalcAll);
    el.addEventListener('change', recalcAll);
  });
  row.querySelector('.icon-remove-inline').addEventListener('click', function(){
    row.remove();
    recalcAll();
  });
  recalcAll();
}

function addAddLessRow(){
  STATE.addLessCounter++;
  var wrap = document.getElementById('addLessRows');
  var row = document.createElement('div');
  row.className = 'charge-row addless-row';
  row.innerHTML =
    '<select class="charge-ledger" data-entity="ledger"></select>' +
    '<button type="button" class="icon-add-inline" data-modal="addLedgerModal"><i class="fa-solid fa-plus"></i></button>' +
    '<select class="addless-sign"><option value="add">Add</option><option value="less">Less</option></select>' +
    '<input type="number" class="addless-amount" value="0" step="0.01" placeholder="Amount">' +
    '<label class="check-row" style="margin:0;"><input type="checkbox" class="addless-include"> In Assessable</label>' +
    '<label class="gstr1-check"><input type="checkbox" class="addless-gstr1" checked> Affect GSTR-1</label>' +
    '<span class="charge-total addless-total">0.00</span>' +
    '<button type="button" class="icon-remove-inline"><i class="fa-solid fa-xmark"></i></button>';
  wrap.appendChild(row);
  buildLedgerOptions(row.querySelector('.charge-ledger'));
  row.querySelectorAll('input, select').forEach(function(el){
    el.addEventListener('input', recalcAll);
    el.addEventListener('change', recalcAll);
  });
  row.querySelector('.icon-remove-inline').addEventListener('click', function(){
    row.remove();
    recalcAll();
  });
  recalcAll();
}

function recalcOpeningStockSummary(){
  var rows = document.querySelectorAll('#openingStockRows .os-row');
  var totalQty = 0, totalTaxable = 0, weightedRate = 0;
  rows.forEach(function(row){
    var qty = parseFloat(row.querySelector('.os-qty').value) || 0;
    var rate = parseFloat(row.querySelector('.os-rate').value) || 0;
    var taxable = parseFloat(row.querySelector('.os-taxable').value) || 0;
    totalQty += qty;
    totalTaxable += taxable;
    weightedRate += qty * rate;
  });
  var avgRate = totalQty > 0 ? (weightedRate / totalQty) : 0;
  var summary = document.getElementById('openingStockSummaryRow');
  if(summary){
    summary.querySelector('.os-total-qty').value = totalQty.toFixed(2);
    summary.querySelector('.os-avg-rate').value = avgRate.toFixed(2);
    summary.querySelector('.os-total-taxable').value = totalTaxable.toFixed(2);
  }
}

function addOpeningStockRow(){
  STATE.openingStockCounter++;
  var wrap = document.getElementById('openingStockRows');
  var row = document.createElement('div');
  row.className = 'os-row';
  row.innerHTML =
    '<div class="os-field"><label class="os-label">Stock Quantity</label><input type="number" class="os-qty" placeholder="0" step="0.01" value="0"></div>' +
    '<div class="os-field"><label class="os-label">MRP</label><input type="number" class="os-mrp" placeholder="0" step="0.01" value="0"></div>' +
    '<div class="os-field"><label class="os-label">Stock Rate (Excluding GST)</label><input type="number" class="os-rate" placeholder="0" step="0.01" value="0"></div>' +
    '<div class="os-field"><label class="os-label">Stock Total Value</label><input type="text" class="os-taxable" readonly value="0.00"></div>' +
    '<button type="button" class="os-remove" title="Remove row"><i class="fa-solid fa-trash"></i> Remove Row</button>';
  wrap.appendChild(row);
  function recalcStockRow(){
    var qty = parseFloat(row.querySelector('.os-qty').value) || 0;
    var rate = parseFloat(row.querySelector('.os-rate').value) || 0;
    row.querySelector('.os-taxable').value = (qty * rate).toFixed(2);
    recalcOpeningStockSummary();
  }
  row.querySelectorAll('.os-qty, .os-rate').forEach(function(el){
    el.addEventListener('input', recalcStockRow);
  });
  row.querySelector('.os-remove').addEventListener('click', function(){
    if(document.querySelectorAll('#openingStockRows .os-row').length > 1){
      row.remove();
      recalcOpeningStockSummary();
    } else {
      toast('At least one opening stock row is required', 'fa-triangle-exclamation');
    }
  });
  recalcOpeningStockSummary();
}

function resetOpeningStockRows(){
  document.getElementById('openingStockRows').innerHTML = '';
  addOpeningStockRow();
  var summary = document.getElementById('openingStockSummaryRow');
  if(summary){ summary.querySelector('.os-total-mrp').value = 'N/A'; }
}

function initOpeningStock(){
  var b = document.getElementById('addOpeningStockBtn');
  if(!b){ return; }
  b.addEventListener('click', addOpeningStockRow);
  addOpeningStockRow();
}

function initItemTypeToggle(){
  var wrap = document.getElementById('itemTypeToggle');
  if(!wrap){ return; }
  wrap.querySelectorAll('.itt-btn').forEach(function(btn){
    btn.addEventListener('click', function(){
      wrap.querySelectorAll('.itt-btn').forEach(function(b){ b.classList.remove('active'); });
      btn.classList.add('active');
      document.getElementById('newItemTypeValue').value = btn.getAttribute('data-value');
    });
  });
}

function resetItemTypeToggle(){
  var wrap = document.getElementById('itemTypeToggle');
  if(!wrap){ return; }
  wrap.querySelectorAll('.itt-btn').forEach(function(b){
    b.classList.toggle('active', b.getAttribute('data-value') === 'goods');
  });
  document.getElementById('newItemTypeValue').value = 'goods';
}

function mockHsnLookup(hsn){
  var descMap = {
    '4001':'Natural rubber, balata, gutta-percha, guayule, chicle and similar natural gums, in primary forms or in plates, sheets or strip',
    '4002':'Synthetic rubber and factice derived from oils, in primary forms or in plates, sheets or strip',
    '4005':'Compounded rubber, unvulcanised, in primary forms or in plates, sheets or strip',
    '4011':'New pneumatic tyres, of rubber',
    '4016':'Other articles of vulcanised rubber other than hard rubber'
  };
  var prefix4 = hsn.substring(0,4);
  var prefix2 = hsn.substring(0,2);
  if(descMap[prefix4]){ return descMap[prefix4]; }
  if(prefix2 === '40'){ return 'Rubber and articles thereof'; }
  return 'Description not available for this HSN code';
}

function initHsnAutoFill(){
  var hsnInput = document.getElementById('newItemHsn');
  var descInput = document.getElementById('newItemHsnDesc');
  if(!hsnInput || !descInput){ return; }
  hsnInput.addEventListener('input', function(){
    var val = hsnInput.value.trim();
    descInput.value = val.length >= 2 ? mockHsnLookup(val) : '';
  });
}

function setInvoiceMode(mode){
  STATE.invoiceMode = mode;
  var table = document.getElementById('itemTable');
  var header = document.getElementById('itemColHeader');
  table.classList.toggle('mode-accounting', mode === 'accounting');
  header.textContent = mode === 'accounting' ? 'Ledger' : 'Item Name';
  document.querySelectorAll('.js-item-search').forEach(function(inp){
    inp.placeholder = mode === 'accounting' ? 'Search ledger...' : 'Search item...';
    inp.value = '';
  });
  closeGlobalSearch();
  recalcAll();
}

function populateQuotationSelect(){
  var sel = document.getElementById('estimateQuotationNumberSelect');
  if(!sel){ return; }
  var current = sel.value;
  sel.innerHTML = '<option value="">Select</option>';
  (SEED.quotations || []).forEach(function(q){
    var opt = document.createElement('option');
    opt.value = q.number;
    opt.textContent = q.number;
    sel.appendChild(opt);
  });
  if((SEED.quotations || []).some(function(q){ return String(q.number) === String(current); })){ sel.value = current; }
}

function loadQuotationIntoSale(q){
  var party = SEED.parties.filter(function(p){ return p.id === q.party_id; })[0];
  if(party){ selectParty(party); }
  document.getElementById('itemTableBody').innerHTML = '';
  q.items.forEach(function(line){
    var it = SEED.items.filter(function(x){ return x.id === line.item_id; })[0];
    var tr = addItemRow();
    if(it){
      tr.querySelector('.js-item-search').value = it.name;
      applyItemToRow(tr, it);
    }
    tr.querySelector('.row-qty').value = line.qty;
    tr.querySelector('.row-price').value = line.price;
  });
  if(q.terms){
    document.getElementById('cfgTerms').checked = true;
    document.getElementById('termsSection').style.display = '';
    document.getElementById('termsText').value = q.terms;
  }
  recalcAll();
}

function initEstimateQuotationSelect(){
  var sel = document.getElementById('estimateQuotationNumberSelect');
  if(!sel){ return; }
  sel.addEventListener('change', function(){
    var num = this.value;
    if(!num){ return; }
    var q = (SEED.quotations || []).filter(function(x){ return String(x.number) === String(num); })[0];
    if(!q){ return; }
    loadQuotationIntoSale(q);
    toast('Quotation #' + q.number + ' details loaded', 'fa-file-invoice');
  });
}

function initItemDetails(){
  document.getElementById('addLineBtn').addEventListener('click', addItemRow);
  document.getElementById('unitPriceMode').addEventListener('change', recalcAll);
  document.getElementById('cessInput').addEventListener('input', recalcAll);
  document.getElementById('tcsPctInput').addEventListener('input', recalcAll);
  document.getElementById('tdsPctInput').addEventListener('input', recalcAll);
  document.getElementById('roundOffInput').addEventListener('input', recalcAll);
  document.getElementById('autoRoundBtn').addEventListener('click', function(){
    document.getElementById('cfgRoundOffMethod').value = 'normal';
    recalcAll();
    toast('Round off calculated automatically', 'fa-calculator');
  });
  document.querySelectorAll('input[name="invoiceMode"]').forEach(function(radio){
    radio.addEventListener('change', function(){ setInvoiceMode(radio.value); });
  });
  document.getElementById('addChargeBtn').addEventListener('click', addChargeRow);
  document.getElementById('addLessBtn').addEventListener('click', addAddLessRow);
  document.getElementById('scanBarcodeBtn').addEventListener('click', function(){
    toast('Barcode scanner is ready to capture a code', 'fa-barcode');
  });
  var aiBtn = document.getElementById('createWithAiBtn');
  if(aiBtn){
    aiBtn.addEventListener('click', function(){
      toast('AI invoice assistant coming soon', 'fa-wand-magic-sparkles');
    });
  }
  var bankSelect = document.getElementById('bankSelect');
  if(bankSelect){ buildBankOptions(bankSelect); }

  window.addEventListener('scroll', function(){
    if(STATE.activeSearchRow){ positionGlobalSearch(STATE.activeSearchRow.querySelector('.js-item-search')); }
  }, true);
  window.addEventListener('resize', function(){
    if(STATE.activeSearchRow){ positionGlobalSearch(STATE.activeSearchRow.querySelector('.js-item-search')); }
  });

  addItemRow();
}

function syncCompliance(){
  var any = document.getElementById('generateEwayBill').checked || document.getElementById('generateEinvoice').checked;
  document.getElementById('partBSection').classList.toggle('show', any);
  document.getElementById('manualEwaySection').style.display = any ? 'none' : '';
}

function initCompliance(){
  document.getElementById('generateEwayBill').addEventListener('change', syncCompliance);
  document.getElementById('generateEinvoice').addEventListener('change', syncCompliance);
  syncCompliance();
}

function applyConfig(){
  var table = document.getElementById('itemTable');
  table.classList.toggle('cfg-hide-discount1', !document.getElementById('cfgDiscount1').checked);
  table.classList.toggle('cfg-hide-discount2', !document.getElementById('cfgDiscount2').checked);
  table.classList.toggle('cfg-hide-totaldiscount', !document.getElementById('cfgTotalDiscount').checked);
  table.classList.toggle('cfg-hide-itemdesc', !document.getElementById('cfgItemDesc').checked);
  table.classList.toggle('cfg-hide-mrp', !document.getElementById('cfgMrp').checked);
  table.classList.toggle('cfg-hide-godown', !document.getElementById('cfgGodown').checked);
  table.classList.toggle('cfg-hide-itemgroup', !document.getElementById('cfgItemGroup').checked);
  table.classList.toggle('cfg-hide-pricelist', !document.getElementById('cfgPriceList').checked);

  document.getElementById('cfgFieldMobileNumber').style.display = document.getElementById('cfgMobileNumber').checked ? '' : 'none';
  document.getElementById('cfgFieldCreditPeriod').style.display = document.getElementById('cfgCreditPeriod').checked ? '' : 'none';
  document.getElementById('cfgFieldValidFor').style.display = document.getElementById('cfgValidFor').checked ? '' : 'none';

  var estimateOn = document.getElementById('cfgEstimateQuotation').checked;
  var saleOrderOn = document.getElementById('cfgSaleOrder').checked;
  var showEstimateSaleInput = estimateOn || saleOrderOn;
  document.getElementById('cfgFieldEstimateSaleInput').style.display = showEstimateSaleInput ? '' : 'none';
  document.getElementById('estimateSaleInputWrap').style.display = saleOrderOn ? '' : 'none';
  document.getElementById('estimateQuotationSelectWrap').style.display = estimateOn ? '' : 'none';
  document.getElementById('estimateSaleInputLabel').textContent = 'Sales Order';
  if(estimateOn){ populateQuotationSelect(); }

  var rubberSection = document.getElementById('newPartyRubberDealerSection');
  if(rubberSection){
    rubberSection.style.display = document.getElementById('cfgRubberDealer').checked ? '' : 'none';
  }

  document.getElementById('uploadDocumentSection').style.display = document.getElementById('cfgUploadDocument').checked ? '' : 'none';
  document.getElementById('bankDetailsSection').style.display = document.getElementById('cfgBankDetails').checked ? '' : 'none';
  document.getElementById('termsSection').style.display = document.getElementById('cfgTerms').checked ? '' : 'none';
  document.getElementById('noteSection').style.display = document.getElementById('cfgNote').checked ? '' : 'none';
  document.getElementById('cessRow').style.display = document.getElementById('cfgCess').checked ? '' : 'none';
  document.getElementById('tcsRow').style.display = document.getElementById('cfgTcs').checked ? '' : 'none';
  document.getElementById('tdsRow').style.display = document.getElementById('cfgTds').checked ? '' : 'none';

  recalcAll();
}

function initEstimateSaleOrderExclusivity(){
  var estimateToggle = document.getElementById('cfgEstimateQuotation');
  var saleOrderToggle = document.getElementById('cfgSaleOrder');
  estimateToggle.addEventListener('change', function(){
    if(this.checked){ saleOrderToggle.checked = false; }
  });
  saleOrderToggle.addEventListener('change', function(){
    if(this.checked){ estimateToggle.checked = false; }
  });
}

function initSaleConfig(){
  document.getElementById('configBtn').addEventListener('click', function(){ openModal('saleConfigModal'); });
  initEstimateSaleOrderExclusivity();
  document.querySelectorAll('#saleConfigModal input[type="checkbox"], #saleConfigModal select').forEach(function(el){
    el.addEventListener('change', applyConfig);
  });
  applyConfig();
}

function addressBoxConfig(scope){
  return {
    dispatch:{summaryId:null, multi:false},
    billing:{summaryId:null, multi:false},
    shipping:{summaryId:'shippingSummary', multi:true}
  }[scope];
}

function formatAddressEntry(a){
  var parts = [a.addr1, a.addr2, a.place, (a.city && a.city !== a.place ? a.city : ''), a.state, a.country, a.pincode].filter(Boolean);
  return parts.join(', ');
}

function renderSelectedAddr(scope){
  var cfg = addressBoxConfig(scope);
  var container = document.getElementById(scope + 'AddrSelected');
  var entries = STATE.addressBooks[scope].filter(function(a){ return a.selected; });
  container.innerHTML = '';
  if(entries.length === 0){
    container.innerHTML = '<div class="ac-empty"><i class="fa-solid fa-location-dot"></i>No address selected</div>';
  } else {
    entries.forEach(function(a){
      var nm = a.legalName || a.companyName || '', tr = a.tradeName || '', L = [];
      if(nm){ L.push([1, nm]); }
      if(tr || a.gstin){ L.push([1, (tr || nm) + (a.gstin ? ' (' + a.gstin + ')' : '')]); }
      var l3 = [a.addr1, a.addr2, a.place].filter(Boolean).join(', ');
      if(l3){ L.push([0, l3]); }
      var l4 = [(a.city && a.city !== a.place ? a.city : ''), a.state, a.pincode, (a.country && a.country !== 'India' ? a.country : '')].filter(Boolean).join(', ');
      if(l4){ L.push([0, l4]); }
      var b = document.createElement('div');
      b.className = 'ac-blk';
      b.innerHTML = L.map(function(l){ return '<div class="ac-line' + (l[0] ? ' b' : '') + '">' + escapeHtml(l[1]) + '</div>'; }).join('');
      container.appendChild(b);
    });
  }
  if(cfg.summaryId){
    var summary = document.getElementById(cfg.summaryId);
    var all = STATE.addressBooks[scope];
    summary.textContent = all.length === 0 ? 'No shipping address set.' : (entries.length + ' of ' + all.length + ' address(es) selected');
  }
}

function selectAddress(scope, id, val){
  var cfg = addressBoxConfig(scope);
  var entries = STATE.addressBooks[scope];
  entries.forEach(function(a){
    if(cfg.multi){
      if(a.id === id){ a.selected = val; }
    } else {
      a.selected = (a.id === id);
    }
  });
  renderSelectedAddr(scope);
  if(scope === 'billing'){ syncShipSameAsBilling(); }
  recalcAll();
}

var ADDR_SCOPE_META = {
  billing:{title:'Billing Address',sub:'Address printed on the invoice for the party',icon:'fa-building',cls:''},
  shipping:{title:'Shipping Addresses',sub:'Where the goods are delivered (select one or more)',icon:'fa-truck',cls:'g'},
  dispatch:{title:'Dispatch Address',sub:'Where the goods are dispatched from',icon:'fa-boxes-packing',cls:'t'}
};

function updateAddressTabs(){
  var meta = ADDR_SCOPE_META[STATE.addressSelectScope] || ADDR_SCOPE_META.billing;
  var title = document.getElementById('addressSelectTitle');
  var sub = document.getElementById('addressSelectSub');
  var ico = document.getElementById('addressSelectIcon');
  if(title){ title.textContent = meta.title; }
  if(sub){ sub.textContent = meta.sub; }
  if(ico){ ico.className = 'mh-ic ' + meta.cls; ico.innerHTML = '<i class="fa-solid ' + meta.icon + '"></i>'; }
}

function renderAddressSelectModal(){
  var scope = STATE.addressSelectScope;
  var cfg = addressBoxConfig(scope);
  var list = document.getElementById('addressSelectList');
  var entries = STATE.addressBooks[scope];
  updateAddressTabs();
  list.innerHTML = '';
  if(entries.length === 0){
    list.innerHTML = '<div class="am-empty"><i class="fa-solid fa-map-location-dot"></i>No ' + scope + ' address added yet.<br>Click <b>Add New Address</b> to create one.</div>';
    return;
  }
  entries.forEach(function(a){
    var row = document.createElement('div');
    row.className = 'am-item' + (a.selected ? ' sel' : '');
    var inputType = cfg.multi ? 'checkbox' : 'radio';
    /* self-contained: not every page defines the global addrLines() helper */
    var L = [], nm = a.companyName || a.legalName || '', tr = a.tradeName || '';
    if(nm){ L.push([1, nm]); }
    if(tr || a.gstin){ L.push([1, (tr || nm) + (a.gstin ? ' (' + a.gstin + ')' : '')]); }
    var l3 = [a.addr1, a.addr2, a.place].filter(Boolean).join(', ');
    if(l3){ L.push([0, l3]); }
    var l4 = [(a.city && a.city !== a.place ? a.city : ''), a.state, a.pincode, (a.country && a.country !== 'India' ? a.country : '')].filter(Boolean).join(', ');
    if(l4){ L.push([0, l4]); }
    if(!L.length){ L.push([0, formatAddressEntry(a) || 'Address']); }
    var lines = L.map(function(l){
      return '<div class="ac-line' + (l[0] ? ' b' : '') + '">' + escapeHtml(l[1]) + '</div>';
    }).join('');
    row.innerHTML =
      '<input type="' + inputType + '" class="addr-check"' + (a.selected ? ' checked' : '') + (cfg.multi ? '' : ' name="addrSelModal_' + scope + '"') + '>' +
      '<div class="am-body">' + lines + '</div>' +
      '<div class="am-act">' +
        '<button type="button" class="addr-edit-btn" title="Edit"><i class="fa-solid fa-pen"></i></button>' +
        '<button type="button" class="addr-del-btn" title="Remove"><i class="fa-solid fa-trash"></i></button>' +
      '</div>';
    row.querySelector('.addr-check').addEventListener('change', function(){
      selectAddress(scope, a.id, this.checked);
      renderAddressSelectModal();
    });
    row.addEventListener('click', function(e){
      if(e.target.closest('.am-act')){ return; }
      if(e.target.classList.contains('addr-check')){ return; }
      var cb = row.querySelector('.addr-check');
      cb.checked = cfg.multi ? !cb.checked : true;
      selectAddress(scope, a.id, cb.checked);
      renderAddressSelectModal();
    });
    row.querySelector('.addr-edit-btn').addEventListener('click', function(e){
      e.stopPropagation();
      openAddressForm(scope, a.id);
    });
    row.querySelector('.addr-del-btn').addEventListener('click', function(e){
      e.stopPropagation();
      if(window.confirm('Remove this address?')){
        STATE.addressBooks[scope] = STATE.addressBooks[scope].filter(function(x){ return x.id !== a.id; });
        if(!cfg.multi && STATE.addressBooks[scope].length && !STATE.addressBooks[scope].some(function(x){ return x.selected; })){
          STATE.addressBooks[scope][0].selected = true;
        }
        renderAddressSelectModal();
        renderSelectedAddr(scope);
        if(scope === 'billing'){ syncShipSameAsBilling(); }
        recalcAll();
      }
    });
    list.appendChild(row);
  });
}

function openAddressSelectModal(scope){
  STATE.addressSelectScope = scope;
  renderAddressSelectModal();
  openModal('addressSelectModal');
}

function openAddressForm(scope, editId){
  STATE.addressFormScope = scope;
  STATE.addressFormEditId = editId || null;
  var labels = {dispatch:'Dispatch', billing:'Billing', shipping:'Shipping'};
  var isDispatch = (scope === 'dispatch');
  document.getElementById('addressFormTitle').textContent = isDispatch ? (editId ? 'Edit Dispatch Address' : 'Dispatch Address') : ((editId ? 'Edit ' : 'Add ') + labels[scope] + ' Address');
  var a = editId ? STATE.addressBooks[scope].filter(function(x){return x.id === editId;})[0] : null;
  var box = document.getElementById('addressFormBox');
  box.classList.toggle('mm-w-600', isDispatch);
  box.classList.toggle('mm-w-720', !isDispatch);
  box.querySelector('.modal-foot').classList.toggle('mm-save-first', !isDispatch);
  document.getElementById('addrSetDispatch').hidden = !isDispatch;
  document.getElementById('addrSetParty').hidden = isDispatch;
  function v(id, val){ document.getElementById(id).value = val || ''; }
  if(isDispatch){
    v('addrFormLine1', a && a.addr1); v('addrFormLine2', a && a.addr2); v('addrFormGstin', a && a.gstin);
    v('addrFormCompany', a && a.companyName); v('addrFormCity', a && (a.city || a.place)); v('addrFormPincode', a && a.pincode);
    buildStateOptions(document.getElementById('addrFormState'), a ? a.state : '');
    document.getElementById('addrFormCountry').value = a ? (a.country || 'India') : 'India';
  } else {
    v('addrPReg', a && a.registrationType); v('addrPGstPan', a && (a.registrationType === 'unregistered' ? a.pan : a.gstin));
    v('addrPLegal', a && (a.legalName || a.companyName)); v('addrPTrade', a && a.tradeName);
    v('addrPPincode', a && a.pincode); v('addrPLine1', a && a.addr1); v('addrPLine2', a && a.addr2);
    v('addrPPlace', a && a.place); v('addrPCity', a && a.city);
    buildStateOptions(document.getElementById('addrPState'), a ? a.state : '');
    document.getElementById('addrPCountry').value = a ? (a.country || 'India') : 'India';
    if(window.__updAddrPReg){ window.__updAddrPReg(); }
  }
  var gb = document.getElementById('addrRubberGearBtn');
  if(gb){
    gb.hidden = isDispatch; document.getElementById('addrRubberPanel').classList.remove('show'); gb.classList.remove('active');
    var rt = document.getElementById('addrPRubberToggle'), rd = !!(a && a.rubberDealer);
    rt.checked = rd; v('addrPRubberLicense', a && a.rubberLicense); v('addrPRubberExpiry', a && a.rubberExpiry);
    document.getElementById('addrPRubberFields').hidden = !rd;
  }
  var hd = document.querySelector('#addressFormModal .mh-ic');
  var meta = {dispatch:['t','fa-boxes-packing','Where the goods are dispatched from'], billing:['','fa-building','Address printed on the credit note for the party'], shipping:['g','fa-truck','Where the goods are delivered']}[scope];
  var sb = document.querySelector('#addressFormModal .mh-sub');
  if(hd && meta){ hd.className = 'mh-ic' + (meta[0] ? ' ' + meta[0] : ''); hd.firstChild.className = 'fa-solid ' + meta[1]; }
  if(sb && meta){ sb.textContent = meta[2]; }
  openModal('addressFormModal');
}

function syncShipSameAsBilling(){
  var checkbox = document.getElementById('shipSameAsBilling');
  if(!checkbox || !checkbox.checked){ return; }
  var billingSel = STATE.addressBooks.billing.filter(function(a){return a.selected;})[0];
  if(!billingSel){
    STATE.addressBooks.shipping = STATE.addressBooks.shipping.filter(function(a){ return !a.fromBilling; });
    renderSelectedAddr('shipping');
    return;
  }
  STATE.addressBooks.shipping = STATE.addressBooks.shipping.filter(function(a){ return !a.fromBilling; });
  var data = Object.assign({}, billingSel, {id:'shipping_from_billing', fromBilling:true, selected:true});
  STATE.addressBooks.shipping.unshift(data);
  renderSelectedAddr('shipping');
}

function initAddressSystem(){
  renderSelectedAddr('dispatch');
  renderSelectedAddr('billing');
  renderSelectedAddr('shipping');

  document.querySelectorAll('.addr-add-btn').forEach(function(btn){
    btn.addEventListener('click', function(){
      openAddressForm(btn.getAttribute('data-scope'), null);
    });
  });
  document.querySelectorAll('.addr-choose-btn').forEach(function(btn){
    btn.addEventListener('click', function(){
      openAddressSelectModal(btn.getAttribute('data-scope'));
    });
  });
  document.getElementById('addressSelectAddNew').addEventListener('click', function(){
    var scope = STATE.addressSelectScope;
    closeModal('addressSelectModal');
    STATE.reopenAddressSelect = scope;
    openAddressForm(scope, null);
  });
  document.getElementById('addressSelectDoneBtn').addEventListener('click', function(){
    closeModal('addressSelectModal');
  });

  document.getElementById('saveAddressFormBtn').addEventListener('click', function(){
    var scope = STATE.addressFormScope;
    function val(id){ return document.getElementById(id).value.trim(); }
    function need(id, label){ if(!val(id)){ toast(label + ' is required', 'fa-triangle-exclamation'); document.getElementById(id).focus(); return false; } return true; }
    var data;
    if(scope === 'dispatch'){
      if(!need('addrFormLine1','Address Line 1') || !need('addrFormCity','City') || !need('addrFormPincode','Pincode') || !need('addrFormState','State') || !need('addrFormCountry','Country')){ return; }
      data = {
        addr1: val('addrFormLine1'), addr2: val('addrFormLine2'), gstin: val('addrFormGstin'), companyName: val('addrFormCompany'),
        place: val('addrFormCity'), city: val('addrFormCity'), pincode: val('addrFormPincode'),
        state: document.getElementById('addrFormState').value, country: document.getElementById('addrFormCountry').value
      };
    } else {
      if(!need('addrPPincode','Pincode') || !need('addrPPlace','Place') || !need('addrPState','State') || !need('addrPCountry','Country')){ return; }
      var reg = document.getElementById('addrPReg').value, gp = val('addrPGstPan');
      var isGst = (reg === 'regular' || reg === 'composition' || reg === 'tds');
      data = {
        registrationType: reg, gstin: isGst ? gp : '', pan: reg === 'unregistered' ? gp : '',
        legalName: val('addrPLegal'), tradeName: val('addrPTrade'), companyName: val('addrPTrade') || val('addrPLegal'),
        addr1: val('addrPLine1'), addr2: val('addrPLine2'), place: val('addrPPlace'), city: val('addrPCity'), pincode: val('addrPPincode'),
        state: document.getElementById('addrPState').value, country: document.getElementById('addrPCountry').value
      };
      if(document.getElementById('addrPRubberToggle')){
        data.rubberDealer = document.getElementById('addrPRubberToggle').checked;
        data.rubberLicense = data.rubberDealer ? val('addrPRubberLicense') : '';
        data.rubberExpiry = data.rubberDealer ? val('addrPRubberExpiry') : '';
      }
    }
    var cfg = addressBoxConfig(scope);
    if(STATE.addressFormEditId){
      var existing = STATE.addressBooks[scope].filter(function(x){return x.id === STATE.addressFormEditId;})[0];
      if(existing){ Object.assign(existing, data); }
    } else {
      data.id = scope + '_' + Date.now();
      data.selected = true;
      if(!cfg.multi){ STATE.addressBooks[scope].forEach(function(a){ a.selected = false; }); }
      STATE.addressBooks[scope].push(data);
    }
    closeModal('addressFormModal');
    renderSelectedAddr(scope);
    if(scope === 'billing'){ syncShipSameAsBilling(); }
    recalcAll();
    toast('Address saved', 'fa-circle-check');
    if(STATE.reopenAddressSelect){
      var reopenScope = STATE.reopenAddressSelect;
      STATE.reopenAddressSelect = null;
      openAddressSelectModal(reopenScope);
    }
  });

  document.getElementById('shipSameAsBilling').addEventListener('change', function(){
    if(this.checked){
      var billingSel = STATE.addressBooks.billing.filter(function(a){return a.selected;})[0];
      if(!billingSel){
        this.checked = false;
        toast('Select or add a billing address first', 'fa-triangle-exclamation');
        return;
      }
      syncShipSameAsBilling();
      toast('Billing address added to shipping addresses', 'fa-circle-check');
    } else {
      STATE.addressBooks.shipping = STATE.addressBooks.shipping.filter(function(a){ return !a.fromBilling; });
      renderSelectedAddr('shipping');
      toast('Billing-based shipping entry removed', 'fa-circle-info');
    }
  });
}

function initPartyAndAddress(){
  initPartySearch();
  initAddressSystem();
}

function initNewPartyShipping(){
  var checkbox = document.getElementById('newPartySameAsBilling');
  var fields1 = document.getElementById('newPartyShippingFields');
  var fields2 = document.getElementById('newPartyShippingFields2');
  if(!checkbox){ return; }
  checkbox.addEventListener('change', function(){
    var show = !checkbox.checked;
    fields1.style.display = show ? '' : 'none';
    fields2.style.display = show ? '' : 'none';
  });
}

function initEntityForms(){

  document.getElementById('savePartyGroupBtn').addEventListener('click', function(){
    var name = document.getElementById('newPartyGroupName').value.trim();
    if(!name){ toast('Group name is required', 'fa-triangle-exclamation'); return; }
    var id = 'g_' + Date.now();
    SEED.partyGroups.push({id:id, name:name});
    appendOptionEverywhere('partyGroup', id, name);
    document.getElementById('addPartyGroupForm').reset();
    closeModal('addPartyGroupModal');
    toast('Group "' + name + '" added', 'fa-layer-group');
  });

  document.getElementById('saveBrokerBtn').addEventListener('click', function(){
    var name = document.getElementById('newBrokerName').value.trim();
    if(!name){ toast('Broker name is required', 'fa-triangle-exclamation'); return; }
    var id = 'br_' + Date.now();
    SEED.brokers.push({id:id, name:name});
    appendOptionEverywhere('broker', id, name);
    document.getElementById('addBrokerForm').reset();
    closeModal('addBrokerModal');
    toast('Broker "' + name + '" added', 'fa-user-tie');
  });

  document.getElementById('saveCessRateBtn').addEventListener('click', function(){
    var val = parseFloat(document.getElementById('newCessRateValue').value);
    if(isNaN(val) || val < 0){ toast('A valid CESS rate is required', 'fa-triangle-exclamation'); return; }
    if(SEED.cessRates.indexOf(val) === -1){ SEED.cessRates.push(val); }
    document.querySelectorAll('[data-entity="cessRate"]').forEach(function(sel){ buildCessRateOptions(sel, val); });
    document.getElementById('addCessRateForm').reset();
    closeModal('addCessRateModal');
    toast('CESS rate ' + val + '% added', 'fa-percent');
  });

  document.getElementById('savePartyBtn').addEventListener('click', function(){
    function val(id){ return document.getElementById(id).value.trim(); }
    function need(id, label){ if(!val(id)){ toast(label + ' is required', 'fa-triangle-exclamation'); document.getElementById(id).focus(); return false; } return true; }
    if(!need('newPartyName','Legal name') || !need('newPartyPincode','Pin code') || !need('newPartyState','State') || !need('newPartyCountry','Country')){ return; }
    var reg = document.getElementById('newPartyRegType').value;
    var gstPan = val('newPartyGstin');
    var isGst = (reg === 'regular' || reg === 'composition' || reg === 'tds');
    var id = 'p_' + Date.now();
    var address = [val('newPartyAddr1'), val('newPartyAddr2'), val('newPartyPlace'), val('newPartyCity'), document.getElementById('newPartyState').value, val('newPartyPincode')].filter(Boolean).join(', ');
    var obType = document.querySelector('input[name="newPartyObType"]:checked');
    var newParty = {
      id:id, name: val('newPartyName'), tradeName: val('newPartyTradeName'),
      gstin: isGst ? gstPan : '', pan: reg === 'unregistered' ? gstPan : val('newPartyPan'),
      address: address, mobile: val('newPartyPhone1'), email: val('newPartyEmail'),
      registrationType: reg, businessEntity: document.getElementById('newPartyEntity').value,
      openingBalance: parseFloat(val('newPartyObAmount')) || 0, openingBalanceType: obType ? obType.value : 'Dr',
      openingBalanceDate: val('newPartyObDate'), creditLimit: parseFloat(val('newPartyCreditLimit')) || 0,
      rubberLicence: document.getElementById('newPartyRubberLicence') ? val('newPartyRubberLicence') : '',
      rubberExpiry: document.getElementById('newPartyRubberExpiry') ? val('newPartyRubberExpiry') : ''
    };
    SEED.parties.push(newParty);
    selectParty(newParty);
    document.getElementById('addPartyForm').reset();
    if(window.__updPartyReg){ window.__updPartyReg(); }
    closeModal('addPartyModal');
    toast('Party "' + newParty.name + '" added', 'fa-user-plus');
  });

  document.getElementById('saveLedgerBtn').addEventListener('click', function(){
    var name = document.getElementById('newLedgerName').value.trim();
    var group = document.getElementById('newLedgerGroup').value;
    if(!name || !group){ toast('Ledger name and group are required', 'fa-triangle-exclamation'); return; }
    var id = 'l_' + Date.now();
    SEED.ledgers.push({id:id, name:name});
    appendOptionEverywhere('ledger', id, name);
    document.getElementById('addLedgerForm').reset();
    closeModal('addLedgerModal');
    recalcAll();
    toast('Ledger "' + name + '" added', 'fa-book');
  });

  document.getElementById('saveTransporterBtn').addEventListener('click', function(){
    var name = document.getElementById('newTransporterName').value.trim();
    if(!name){ toast('Transport name is required', 'fa-triangle-exclamation'); return; }
    var id = 't_' + Date.now();
    SEED.transporters.push({id:id, name:name});
    appendOptionEverywhere('transporter', id, name);
    document.getElementById('addTransporterForm').reset();
    closeModal('addTransporterModal');
    toast('Transport "' + name + '" added', 'fa-truck');
  });

  document.getElementById('saveUomBtn').addEventListener('click', function(){
    var shortName = document.getElementById('newUomShort').value.trim();
    var fullName = document.getElementById('newUomFull').value.trim();
    if(!shortName || !fullName){ toast('Both UOM fields are required', 'fa-triangle-exclamation'); return; }
    var id = 'u_' + Date.now();
    var text = shortName.toUpperCase() + '-' + fullName.toUpperCase();
    SEED.uoms.push({id:id, name:text});
    appendOptionEverywhere('uom', id, text);
    document.getElementById('addUomForm').reset();
    closeModal('addUomModal');
    toast('Unit "' + text + '" added', 'fa-ruler');
  });

  document.getElementById('saveCategoryBtn').addEventListener('click', function(){
    var name = document.getElementById('newCategoryName').value.trim();
    if(!name){ toast('Category name is required', 'fa-triangle-exclamation'); return; }
    var id = 'c_' + Date.now();
    SEED.categories.push({id:id, name:name});
    appendOptionEverywhere('category', id, name);
    document.querySelectorAll('.row-itemgroup').forEach(function(sel){
      var opt = document.createElement('option');
      opt.value = id;
      opt.textContent = name;
      sel.appendChild(opt);
    });
    document.getElementById('addCategoryForm').reset();
    closeModal('addCategoryModal');
    toast('Category "' + name + '" added', 'fa-tags');
  });

  document.getElementById('saveBankBtn').addEventListener('click', function(){
    var name = document.getElementById('newBankName').value.trim();
    var acc = document.getElementById('newBankAccount').value.trim();
    if(!name || !acc){ toast('Bank name and account number are required', 'fa-triangle-exclamation'); return; }
    var id = 'b_' + Date.now();
    var text = name + ' - ' + acc.slice(-4);
    SEED.banks.push({id:id, name:text});
    appendOptionEverywhere('bank', id, text);
    document.getElementById('addBankForm').reset();
    closeModal('addBankModal');
    toast('Bank "' + name + '" added', 'fa-building-columns');
  });

    document.getElementById('newItemDescSameAsName').addEventListener('change', function(e){
    if(e.target.checked){ document.getElementById('newItemDescription').value = document.getElementById('newItemName').value; }
  });
  (function(){
    var q=document.getElementById('newItemStockQty'), r=document.getElementById('newItemStockRate'), t=document.getElementById('newItemStockTotal');
    function calc(){ if(q&&r&&t){ t.value=((parseFloat(q.value)||0)*(parseFloat(r.value)||0)).toFixed(2); } }
    if(q){ q.addEventListener('input',calc); } if(r){ r.addEventListener('input',calc); }
  })();

  document.getElementById('saveItemBtn').addEventListener('click', function(){
    function v(id){ var e=document.getElementById(id); return e ? e.value : ''; }
    function ck(id){ var e=document.getElementById(id); return !!(e && e.checked); }
    var name = v('newItemName').trim();
    var primaryUom = v('newItemPrimaryUom');
    if(!name){ toast('Item name is required', 'fa-triangle-exclamation'); return; }
    if(!primaryUom){ toast('Primary unit of measurement is required', 'fa-triangle-exclamation'); return; }
    var stockQty = parseFloat(v('newItemStockQty')) || 0;
    var stockRate = parseFloat(v('newItemStockRate')) || 0;
    var newItem = {
      id:'i_'+Date.now(), name:name, uom:primaryUom,
      gst:parseFloat(v('newItemGstRate'))||0, cess:parseFloat(v('newItemCessRate'))||0,
      hsn:v('newItemHsn').trim(), sku:v('newItemSku').trim(),
      price:stockRate, mrp:0, size:'', colour:'', brand:'', itemType:'goods',
      category:v('newItemCategory'), description:v('newItemDescription'),
      batch:v('newItemBatch'), expiry:v('newItemExpiry'),
      openingStockDate:v('newItemOpeningDate'),
      rcm:ck('newItemRcmToggle'), negativeStock:ck('newItemNegStock'),
      stockEntries:[], totalStock:stockQty, stockByGodown:{}, priceHistory:[]
    };
    (SEED.godowns||[]).forEach(function(g, idx){ newItem.stockByGodown[g.id] = {qty: idx===0?stockQty:0, rate:stockRate, mrp:0}; });
    SEED.items.push(newItem);
    if(!SEED.priceHistory){ SEED.priceHistory = {}; }
    SEED.priceHistory[newItem.id] = [];
    var focusRow = STATE.targetRow;
    if(focusRow){ applyItemToRow(focusRow, newItem); focusRow.querySelector('.js-item-search').value = name; }
    document.getElementById('addItemForm').reset();
    var hd=document.getElementById('newItemHsnDesc'); if(hd){ hd.value=''; }
    var st=document.getElementById('newItemStockTotal'); if(st){ st.value='0.00'; }
    closeModal('addItemModal');
    toast('Item "' + name + '" added', 'fa-box');
  });
}

function initUpload(){
  var input = document.getElementById('docUpload');
  var list = document.getElementById('uploadList');
  input.addEventListener('change', function(){
    Array.from(input.files).forEach(function(f){ STATE.uploadedFiles.push(f); });
    renderUploadList();
    input.value = '';
  });
  function renderUploadList(){
    list.innerHTML = '';
    STATE.uploadedFiles.forEach(function(f, idx){
      var chip = document.createElement('div');
      chip.className = 'upload-chip';
      chip.innerHTML = '<i class="fa-solid fa-paperclip"></i><span>' + f.name + '</span><button type="button"><i class="fa-solid fa-xmark"></i></button>';
      chip.querySelector('button').addEventListener('click', function(){
        STATE.uploadedFiles.splice(idx, 1);
        renderUploadList();
      });
      list.appendChild(chip);
    });
  }
}

function validateSale(){
  var billingSel = STATE.addressBooks.billing.filter(function(a){return a.selected;})[0];
  if(!document.getElementById('partySelect').value || !billingSel){
    toast('Please select a party before saving', 'fa-triangle-exclamation');
    document.getElementById('partySearchInput').focus();
    return false;
  }
  var rows = document.querySelectorAll('#itemTableBody .item-row');
  if(rows.length === 0){ toast('Add at least one item line', 'fa-triangle-exclamation'); return false; }
  var hasValidLine = false;
  rows.forEach(function(tr){
    var qty = parseFloat(tr.querySelector('.row-qty').value) || 0;
    var label = (tr.querySelector('.js-item-search') && tr.querySelector('.js-item-search').value) || tr.dataset.itemName;
    if(qty > 0 && label){ hasValidLine = true; }
  });
  if(!hasValidLine){ toast('Each line item needs an item and a quantity greater than zero', 'fa-triangle-exclamation'); return false; }
  if(!document.getElementById('creditNoteDate').value){ toast('Credit Note date is required', 'fa-triangle-exclamation'); return false; }
  if(!document.getElementById('creditInvoiceNumber').value){ toast('Please select the source invoice', 'fa-triangle-exclamation'); return false; }
  return true;
}

function resetSaleForm(){
  document.getElementById('itemTableBody').innerHTML = '';
  document.getElementById('additionalChargesRows').innerHTML = '';
  document.getElementById('addLessRows').innerHTML = '';
  document.getElementById('partySelect').value = '';
  document.getElementById('partySearchInput').value = '';
  document.getElementById('partyGstin').value = '';
  buildCreditInvoiceOptions('', '');
  document.getElementById('creditInvoiceNumber').value = '';
  document.getElementById('creditInvoiceTotalAmount').value = formatMoney(0);
  document.getElementById('creditInvoiceDate').value = '';
  STATE.addressBooks.billing = [];
  STATE.addressBooks.shipping = [];
  renderSelectedAddr('billing');
  renderSelectedAddr('shipping');
  document.getElementById('shipSameAsBilling').checked = true;
  document.getElementById('generateEwayBill').checked = false;
  document.getElementById('generateEinvoice').checked = false;
  document.getElementById('generateDeliveryChallan').checked = false;
  syncCompliance();
  document.getElementById('transporterSelect').value = '';
  document.getElementById('transporterGstin').value = '';
  document.getElementById('documentDate').value = '';
  document.getElementById('documentNumber').value = '';
  document.getElementById('vehicleNumber').value = '';
  document.getElementById('transactionType').value = 'Regular';
  document.getElementById('vehicleType').value = 'Regular';
  document.getElementById('transporterMode').value = 'Road';
  document.getElementById('ewayBillNumber').value = '';
  document.getElementById('ewayBillDate').value = '';
  document.getElementById('cessInput').value = 0;
  document.getElementById('tcsPctInput').value = 0;
  document.getElementById('tdsPctInput').value = 0;
  document.getElementById('roundOffInput').value = 0;
  document.getElementById('termsText').value = '';
  document.getElementById('noteText').value = '';
  document.getElementById('estimateSaleInputValue').value = 50;
  document.getElementById('estimateQuotationNumberSelect').value = '';
  var nextNum = (parseInt(document.getElementById('creditNoteNumber').value, 10) || 30) + 1;
  document.getElementById('creditNoteNumber').value = nextNum;
  STATE.uploadedFiles = [];
  document.getElementById('uploadList').innerHTML = '';
  addItemRow();
  recalcAll();
}

function initSaveActions(){
  document.getElementById('saveBtn').addEventListener('click', function(){
    if(!validateSale()){ return; }
    toast('Credit Note saved successfully', 'fa-circle-check');
  });
  document.getElementById('saveNewBtn').addEventListener('click', function(){
    if(!validateSale()){ return; }
    toast('Credit Note saved. Starting a new Credit Note', 'fa-circle-check');
    resetSaleForm();
  });
  document.getElementById('savePrintBtn').addEventListener('click', function(){
    if(!validateSale()){ return; }
    toast('Credit Note saved. Preparing print preview', 'fa-print');
    setTimeout(function(){ window.print(); }, 400);
  });
  document.getElementById('backBtn').addEventListener('click', function(){
    if(window.confirm('Leave this page? Unsaved changes will be lost.')){
      if(window.history.length > 1){ window.history.back(); } else { window.location.href = 'dashboard.php'; }
    }
  });
}

function initTopTools(){
  var creditNoteNumber = document.getElementById('creditNoteNumber');
  document.getElementById('prevTxnBtn').addEventListener('click', function(){
    var n = parseInt(creditNoteNumber.value, 10) || 1;
    if(n > 1){ creditNoteNumber.value = n - 1; toast('Loaded Credit Note #' + creditNoteNumber.value, 'fa-clock-rotate-left'); }
  });
  document.getElementById('nextTxnBtn').addEventListener('click', function(){
    var n = parseInt(creditNoteNumber.value, 10) || 1;
    creditNoteNumber.value = n + 1;
    toast('Loaded Credit Note #' + creditNoteNumber.value, 'fa-clock-rotate-left');
  });
}

document.addEventListener('DOMContentLoaded', function(){
  populateStaticMasterSelects();
  initHeader();
  initModals();
  initPartyAndAddress();
  initCreditInvoiceReference();
  initNewPartyShipping();
  initEntityForms();
  initItemDetails();
  initSaleConfig();
  initCompliance();
  initUpload();
  initSaveActions();
  initTopTools();
  initGstinFetch();
  initHsnAutoFill();
  initEstimateQuotationSelect();
  initPriceHistory();
});
</script>
<script>
(function(){
  function init(){
    var left=document.querySelector('.topbar-left'), sec=document.querySelector('.topbar-right-secondary'),
        eye=document.getElementById('eyeToggle');
    if(!left||!sec||document.getElementById('ctrlDrawer')) return;

    var search=document.querySelector('.topbar-right > .icon-btn:not(#eyeToggle)');
    if(search) sec.insertBefore(search, sec.firstChild);
    if(eye) sec.insertBefore(eye, sec.firstChild);

    var coSel=document.querySelector('.company-select select'), fySel=document.querySelector('.fy-select select'),
        quick=document.querySelectorAll('.qbtn-group .qbtn');

    var btn=document.createElement('button');
    btn.className='icon-btn ctrl-btn'; btn.id='ctrlBtn'; btn.type='button'; btn.setAttribute('aria-label','Open controls');
    btn.innerHTML='<i class="fa-solid fa-sliders"></i>';
    sec.appendChild(btn);

    var ov=document.createElement('div'); ov.className='ctrl-overlay'; ov.id='ctrlOverlay';
    var dr=document.createElement('aside'); dr.className='ctrl-drawer'; dr.id='ctrlDrawer'; dr.setAttribute('aria-hidden','true');
    dr.innerHTML=
      '<div class="ctrl-head"><span class="ctrl-title">Controls</span>'+
      '<button type="button" class="icon-btn ctrl-close" id="ctrlClose" aria-label="Close"><i class="fa-solid fa-xmark"></i></button></div>'+
      '<div class="ctrl-body"><div class="ctrl-field" id="ctrlCo"></div><div class="ctrl-field" id="ctrlFy"></div>'+
      '<div class="ctrl-label">Quick add</div><div class="ctrl-quick" id="ctrlQuick"></div></div>';
    document.body.appendChild(ov); document.body.appendChild(dr);

    if(coSel){ var c=coSel.cloneNode(true); c.className='ctrl-select'; c.selectedIndex=coSel.selectedIndex; document.getElementById('ctrlCo').appendChild(c); }
    if(fySel){ var f=fySel.cloneNode(true); f.className='ctrl-select'; f.selectedIndex=fySel.selectedIndex; document.getElementById('ctrlFy').appendChild(f); }
    quick.forEach(function(a){ var q=a.cloneNode(true); q.className=''; document.getElementById('ctrlQuick').appendChild(q);
      var on=function(){ q.classList.add('is-hover'); }, off=function(){ q.classList.remove('is-hover'); };
      q.addEventListener('mouseenter',on); q.addEventListener('mouseleave',off);
      q.addEventListener('pointerenter',on); q.addEventListener('pointerleave',off);
      q.addEventListener('touchstart',on,{passive:true}); q.addEventListener('touchend',function(){ setTimeout(off,250); }); q.addEventListener('touchcancel',off);
    });

    function openD(e){ e.stopPropagation(); document.querySelectorAll('.dropdown-panel.show').forEach(function(p){p.classList.remove('show');}); dr.classList.add('show'); ov.classList.add('show'); dr.setAttribute('aria-hidden','false'); document.body.style.overflow='hidden'; }
    function closeD(){ dr.classList.remove('show'); ov.classList.remove('show'); dr.setAttribute('aria-hidden','true'); document.body.style.overflow=''; }
    btn.addEventListener('click',openD);
    document.getElementById('ctrlClose').addEventListener('click',closeD);
    ov.addEventListener('click',closeD);
    document.addEventListener('keydown',function(e){ if(e.key==='Escape') closeD(); });
  }
  if(document.readyState!=='loading') init(); else document.addEventListener('DOMContentLoaded',init);
})();
</script>
<script>
(function(){
  function addSupport(){
    if(document.getElementById('supportBtn')) return;
    var link=document.createElement('a');
    link.id='supportBtn';
    link.className='support-btn';
    link.href='support_ticket.php';
    link.title='Support';
    link.setAttribute('aria-label','Support');
    link.innerHTML='<i class="fa-solid fa-headset"></i><span class="support-text">Support</span>';

    var phoneWrap=document.querySelector('.topbar .phone-wrap');
    var sec=document.querySelector('.topbar .topbar-right-secondary');
    var right=document.querySelector('.topbar .topbar-right');
    var bar=document.querySelector('.topbar');

    if(phoneWrap && phoneWrap.parentNode){
      phoneWrap.parentNode.insertBefore(link, phoneWrap);
    } else if(sec){
      sec.insertBefore(link, sec.firstChild);
    } else if(right){
      right.insertBefore(link, right.firstChild);
    } else if(bar){
      bar.appendChild(link);
    }
  }
  if(document.readyState!=='loading') addSupport(); else document.addEventListener('DOMContentLoaded',addSupport);
})();
</script>
<script>
(function(){
  var s=document.getElementById('hkStar'); if(!s) return;
  s.addEventListener('click',function(){
    var on=s.classList.toggle('on');
    s.firstChild.className=on?'fa-solid fa-star':'fa-regular fa-star';
  });
})();
</script>
<script>
(function(){
  function wire(regId, grpId, lblId, inputId, tradeGrpId, fetchId, key){
    var reg = document.getElementById(regId); if(!reg) return;
    var grp = document.getElementById(grpId), lbl = document.getElementById(lblId), inp = document.getElementById(inputId), tg = document.getElementById(tradeGrpId), fb = document.getElementById(fetchId);
    function upd(){
      var v = reg.value;
      if(v === 'regular' || v === 'composition' || v === 'tds'){ grp.classList.remove('hidden-field'); lbl.textContent = 'GST Number'; inp.placeholder = 'Enter GST number'; tg.classList.remove('hidden-field'); if(fb) fb.style.display = ''; }
      else if(v === 'unregistered'){ grp.classList.remove('hidden-field'); lbl.textContent = 'PAN Number'; inp.placeholder = 'Enter PAN number'; tg.classList.add('hidden-field'); if(fb) fb.style.display = 'none'; }
      else { grp.classList.add('hidden-field'); tg.classList.add('hidden-field'); }
    }
    reg.addEventListener('change', upd); upd(); window[key] = upd;
  }
  wire('newPartyRegType','newPartyGstPanGroup','newPartyGstPanLabel','newPartyGstin','newPartyTradeGroup','fetchGstinPartyBtn','__updPartyReg');
  wire('addrPReg','addrPGstPanGroup','addrPGstPanLabel','addrPGstPan','addrPTradeGroup','fetchGstinAddrPartyBtn','__updAddrPReg');
  var st = document.getElementById('newPartyState');
  if(st && !st.options.length && typeof buildStateOptions === 'function'){ buildStateOptions(st, ''); }
})();

(function(){
  var btn = document.getElementById('addrRubberGearBtn'), panel = document.getElementById('addrRubberPanel'), tg = document.getElementById('addrPRubberToggle'), fields = document.getElementById('addrPRubberFields');
  if(!btn || !panel || !tg){ return; }
  btn.addEventListener('click', function(e){ e.stopPropagation(); panel.classList.toggle('show'); btn.classList.toggle('active', panel.classList.contains('show')); });
  panel.addEventListener('click', function(e){ e.stopPropagation(); });
  tg.addEventListener('change', function(){ fields.hidden = !tg.checked; });
  document.addEventListener('click', function(){ panel.classList.remove('show'); btn.classList.remove('active'); });
})();

(function(){
  var KEY = 'garmentsItemOptionalFields';
  var panel = document.getElementById('itemFieldSettingsPanel'), btn = document.getElementById('itemFieldSettingsBtn');
  if(!panel || !btn) return;
  var chks = Array.prototype.slice.call(panel.querySelectorAll('input[type="checkbox"]'));
  function apply(){
    chks.forEach(function(c){
      var k = c.getAttribute('data-field');
      Array.prototype.forEach.call(document.querySelectorAll('#addItemModal .opt-field[data-field="' + k + '"]'), function(el){
        el.classList.toggle('mm-hide', !c.checked);
      });
    });
    var rq = panel.querySelector('[data-field="reorder"]');
    var on = rq ? rq.checked : true;
  }
  try {
    var raw = localStorage.getItem(KEY);
    if(raw){ var st = JSON.parse(raw); chks.forEach(function(c){ var k = c.getAttribute('data-field'); if(Object.prototype.hasOwnProperty.call(st, k)){ c.checked = st[k]; } }); }
  } catch(e) {}
  apply();
  chks.forEach(function(c){
    c.addEventListener('change', function(){
      apply();
      try { var o = {}; chks.forEach(function(x){ o[x.getAttribute('data-field')] = x.checked; }); localStorage.setItem(KEY, JSON.stringify(o)); } catch(e) {}
    });
  });
  btn.addEventListener('click', function(e){ e.stopPropagation(); panel.classList.toggle('show'); btn.classList.toggle('active', panel.classList.contains('show')); });
  panel.addEventListener('click', function(e){ e.stopPropagation(); });
  document.addEventListener('click', function(){ panel.classList.remove('show'); btn.classList.remove('active'); });
})();

(function(){
  function build(){
    var body = document.querySelector('#ctrlDrawer .ctrl-body');
    if(!body) return false;
    if(document.getElementById('ctrlHelp')) return true;
    var wrap = document.createElement('div'); wrap.className = 'ctrl-help'; wrap.id = 'ctrlHelp';
    var label = document.createElement('div'); label.className = 'ctrl-label'; label.textContent = 'Help & contact';
    var grid = document.createElement('div'); grid.className = 'ctrl-quick';
    function tile(href, iconHtml, text, ext){
      var a = document.createElement('a'); a.href = href;
      if(ext){ a.target = '_blank'; a.rel = 'noopener'; }
      a.innerHTML = iconHtml + ' ';
      a.appendChild(document.createTextNode(text));
      var on = function(){ a.classList.add('is-hover'); }, off = function(){ a.classList.remove('is-hover'); };
      a.addEventListener('mouseenter', on); a.addEventListener('mouseleave', off);
      a.addEventListener('pointerenter', on); a.addEventListener('pointerleave', off);
      a.addEventListener('touchstart', on, {passive:true}); a.addEventListener('touchend', function(){ setTimeout(off, 250); }); a.addEventListener('touchcancel', off);
      grid.appendChild(a);
    }
    tile('support_ticket.php', '<i class="fa-solid fa-headset"></i>', 'Support', false);
    var ph = document.querySelector('.topbar .phone-text');
    var digits = ph ? ph.textContent.replace(/[^+\d]/g, '') : '';
    if(digits){ tile('tel:' + digits, '<i class="fa-solid fa-phone"></i>', 'Call', false); }
    Array.prototype.forEach.call(document.querySelectorAll('#phonePanel a.dd-item'), function(a){
      var ic = a.querySelector('i');
      tile(a.getAttribute('href'), ic ? ic.outerHTML : '', a.textContent.replace(/\s+/g, ' ').trim(), a.getAttribute('target') === '_blank');
    });
    wrap.appendChild(label); wrap.appendChild(grid); body.appendChild(wrap);
    return true;
  }
  if(!build()){
    if(document.readyState === 'loading'){ document.addEventListener('DOMContentLoaded', build); }
    else { window.addEventListener('load', build); }
  }
})();
</script>
<script>
(function(){
  document.addEventListener('click',function(e){
    var b=e.target.closest('.mm-tabs button');
    if(!b){return;}
    var body=b.closest('.modal-body');
    body.querySelectorAll('.mm-tabs button').forEach(function(x){x.classList.toggle('on',x===b);});
    body.querySelectorAll('.mm-tp').forEach(function(p){p.classList.toggle('on',p.getAttribute('data-p')===b.getAttribute('data-tab'));});
  });
  var nf=HTMLElement.prototype.focus;
  HTMLElement.prototype.focus=function(){
    var p=this.closest&&this.closest('.mm-tp');
    if(p&&!p.classList.contains('on')){
      var b=p.parentNode.querySelector('.mm-tabs [data-tab="'+p.getAttribute('data-p')+'"]');
      if(b){b.click();}
    }
    return nf.apply(this,arguments);
  };
})();
</script>
</body>
</html>