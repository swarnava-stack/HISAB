<?php
$active_page = 'sale-create';
$page_title = 'Add Sale';
$company_name = 'M/S JOY GURU RUBBER';
$fy_year = '2026 - 27';

$parties = array(
  array('id'=>'p1','name'=>'Ashoke Trading Co.','tradeName'=>'','gstin'=>'18AAAAA0000A1Z5','addr1'=>'123, MG Road','addr2'=>'','place'=>'Guwahati','city'=>'Guwahati','state'=>'Assam','pincode'=>'781001','address'=>'123, MG Road, Guwahati, Assam, India, 781001','mobile'=>'9876500001','balance'=>12500,'balanceType'=>'Dr'),
  array('id'=>'p2','name'=>'Bharat Rubber Distributors','tradeName'=>'','gstin'=>'19BBBBB1111B2Z6','addr1'=>'45, Park Street','addr2'=>'','place'=>'Kolkata','city'=>'Kolkata','state'=>'West Bengal','pincode'=>'700016','address'=>'45, Park Street, Kolkata, West Bengal, India, 700016','mobile'=>'9876500002','balance'=>8200,'balanceType'=>'Cr'),
  array('id'=>'p3','name'=>'Diamond Enterprises','tradeName'=>'','gstin'=>'','addr1'=>'Manubazar Road','addr2'=>'','place'=>'South Tripura','city'=>'South Tripura','state'=>'Tripura','pincode'=>'799143','address'=>'Manubazar Road, South Tripura, Tripura, India, 799143','mobile'=>'9876500003','balance'=>0,'balanceType'=>'Dr'),
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
$paymentLedgers = array(
  array('id'=>'pay1','name'=>'Cash in Hand','group'=>'lg1'),
  array('id'=>'pay2','name'=>'HDFC Bank - 1234','group'=>'lg2'),
  array('id'=>'pay3','name'=>'SBI - 5678','group'=>'lg2'),
  array('id'=>'pay4','name'=>'UPI Collection','group'=>'lg2'),
);
$ledgerGroups = array(
  array('id'=>'lg3','name'=>'Current Assets','parent'=>''),
  array('id'=>'lg1','name'=>'Cash-in-Hand','parent'=>'lg3'),
  array('id'=>'lg2','name'=>'Bank Accounts','parent'=>'lg3'),
  array('id'=>'lg4','name'=>'Sundry Debtors','parent'=>'lg3'),
  array('id'=>'lg5','name'=>'Current Liabilities','parent'=>''),
  array('id'=>'lg6','name'=>'Sundry Creditors','parent'=>'lg5'),
);
$invoiceSeries = array(
  array('id'=>'s1','prefix'=>'MJGRS/26-27/','next'=>30),
  array('id'=>'s2','prefix'=>'MJGRS/EXP/26-27/','next'=>5),
  array('id'=>'s3','prefix'=>'MJGRS/RET/26-27/','next'=>12),
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

$seed = array(
  'parties'=>$parties,'items'=>$items,'ledgers'=>$ledgers,'uoms'=>$uoms,
  'transporters'=>$transporters,'banks'=>$banks,'categories'=>$categories,'gstRates'=>$gstRates,
  'partyGroups'=>$partyGroups,'brokers'=>$brokers,'priceLists'=>$priceLists,'states'=>$states,'cessRates'=>$cessRates,
  'godowns'=>$godowns,'quotations'=>$quotations,'paymentLedgers'=>$paymentLedgers,'ledgerGroups'=>$ledgerGroups,
  'invoiceSeries'=>$invoiceSeries
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Sale | HisabKitab</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
:root{
  --primary:#473c97;--primary-dark:#3a3080;--primary-light:#f1effb;--bg:#f7f7fc;--text:#1f1d3d;--muted:#6c6f8a;--border:#e9e8f4;
  --orange:#d65907;--orange2:#f76600;--red:#d93636;
  --pu:#5b2fa8;--pu-d:#46218a;--pu-m:#8a63d2;--pu-l:#f2ecfc;--pu-xl:#f8f5fe;
  --teal:#0f857f;--teal-d:#0a6b66;--teal-l:#e4f5f3;
  --gr:#1fb36b;--gr-d:#13935a;--gr-l:#e8f8f0;--gr-b:#bfe8d3;
  --line:#e6e8f2;--r:14px;--sh:0 4px 18px rgba(80,60,160,.07);
}
*{box-sizing:border-box;margin:0;padding:0;}
html,body{min-height:100%;}
body{font-family:'Poppins','Segoe UI',Roboto,Arial,sans-serif;font-size:13px;color:var(--text);background:linear-gradient(180deg,#e3f6f4 0,#f3f7fb 280px) fixed,#f3f7fb;line-height:1.45;-webkit-font-smoothing:antialiased;overflow-x:hidden;}
a{text-decoration:none;color:inherit;}
button{font-family:inherit;cursor:pointer;}
input,select,textarea{font-family:inherit;font-size:12.5px;color:var(--text);max-width:100%;}
input[type=date]{cursor:pointer;}
ul{list-style:none;}
[hidden]{display:none !important;}
.mm-hide{display:none !important;}
.app{display:flex;min-height:100vh;width:100%;}

.sidebar,.topbar,.hk-hero,.ctrl-drawer,.ctrl-overlay{font-family:'Poppins','Segoe UI',Roboto,Arial,sans-serif;font-size:13px;line-height:1.4;}
.sidebar{width:250px;background:var(--primary);color:#fff;flex-shrink:0;position:fixed;top:0;left:0;bottom:0;overflow-y:auto;z-index:1000;transition:transform .25s ease, width .25s ease;scrollbar-width:thin;}
.sidebar::-webkit-scrollbar{width:5px;}
.sidebar::-webkit-scrollbar-thumb{background:rgba(255,255,255,.25);border-radius:5px;}
.sidebar.collapsed{width:64px;}
.sidebar.collapsed .menu-text,.sidebar.collapsed .menu-arrow,.sidebar.collapsed .section-label,.sidebar.collapsed .sidebar-brand-text{display:none;}
.sidebar-header{display:flex;align-items:center;justify-content:space-between;padding:14px 12px;border-bottom:1px solid rgba(255,255,255,.12);}
.sidebar-brand{display:flex;align-items:center;gap:8px;font-weight:700;font-size:14px;white-space:nowrap;}
.sidebar-brand i{background:#fff;color:var(--primary);width:26px;height:26px;border-radius:6px;display:flex;align-items:center;justify-content:center;font-size:13px;}
.sidebar-collapse-btn{background:rgba(255,255,255,.12);border:none;color:#fff;width:24px;height:24px;border-radius:5px;display:flex;align-items:center;justify-content:center;font-size:11px;flex-shrink:0;}
.sidebar-menu{padding:6px 6px 20px;}
.menu-item{position:relative;min-width:0;}
.menu-link{display:flex;align-items:flex-start;gap:9px;padding:8px 8px;border-radius:6px;font-size:12px;font-weight:500;color:rgba(255,255,255,.92);white-space:normal;word-break:break-word;min-width:0;}
.menu-link i.menu-icon{width:16px;text-align:center;font-size:13px;flex-shrink:0;margin-top:1px;}
.menu-link:hover,.menu-link.active{background:rgba(255,255,255,.14);color:#fff;}
.menu-link.active{background:rgba(255,255,255,.18);font-weight:700;}
.menu-text{flex:1;min-width:0;line-height:1.3;}
.menu-arrow{font-size:10px;transition:transform .2s ease;flex-shrink:0;margin-top:3px;}
.menu-item.open>.menu-link .menu-arrow{transform:rotate(90deg);}
.submenu{max-height:0;overflow:hidden;transition:max-height .3s ease;padding-left:10px;border-left:1px dashed rgba(255,255,255,.15);margin-left:16px;}
.menu-item.open>.submenu{max-height:3000px;}
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
.notif-wrap,.profile-wrap,.phone-wrap{position:relative;}
.notif-btn{position:relative;}
.notif-dot{position:absolute;top:4px;right:5px;width:7px;height:7px;background:var(--orange2);border-radius:50%;border:1.5px solid #fff;}
.phone-btn{background:var(--primary);color:#fff;border:none;border-radius:6px;height:32px;padding:0 10px;display:flex;align-items:center;gap:6px;font-size:12px;font-weight:600;white-space:nowrap;}
.avatar{width:32px;height:32px;border-radius:8px;background:var(--primary);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;font-size:13px;cursor:pointer;border:2px solid var(--orange2);flex-shrink:0;}
.dropdown-panel{position:absolute;top:38px;right:0;background:#fff;border:1px solid var(--border);border-radius:8px;box-shadow:0 8px 24px rgba(0,0,0,.12);min-width:220px;display:none;z-index:1200;overflow:hidden;}
.dropdown-panel.show{display:block;}
.dropdown-panel a,.dropdown-panel .dd-item{display:flex;align-items:center;gap:8px;padding:9px 14px;font-size:12px;color:var(--text);}
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
@media(max-width:480px){.dropdown-panel{right:-10px;min-width:200px;}}
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
@media(max-width:480px){.support-btn{height:34px;padding:0 9px;}}
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
.ctrl-help{display:none;margin-top:6px;}
@media(max-width:768px){
  #supportBtn,.topbar .support-btn,.topbar .phone-wrap{display:none !important;}
  .ctrl-help{display:block;}
}

.content{padding:10px 14px 90px;max-width:100%;overflow-x:hidden;}
.tab-tools{display:flex;justify-content:flex-end;align-items:center;gap:8px;margin-bottom:8px;flex-wrap:wrap;}
.round-btn{width:38px;height:38px;border-radius:50%;border:1px solid var(--line);background:#fff;color:var(--pu);display:flex;align-items:center;justify-content:center;box-shadow:var(--sh);font-size:13px;}
.round-btn:hover{background:var(--pu-l);}

.grid{display:grid;gap:12px;margin-bottom:12px;}
.g-top{grid-template-columns:1.25fr 1fr;align-items:stretch;}
.g-party{grid-template-columns:1fr 1fr 1fr;align-items:stretch;}
.g-bottom{grid-template-columns:1.15fr 1fr;align-items:stretch;}
.stack{display:flex;flex-direction:column;gap:12px;min-width:0;}
.stack>.grow{flex:1;}
.card{background:#fff;border-radius:var(--r);box-shadow:var(--sh);padding:12px 14px;min-width:0;}
.card-h{display:flex;align-items:center;gap:10px;margin-bottom:10px;}
.card-h .ci{width:30px;height:30px;border-radius:50%;background:var(--pu-l);color:var(--pu);display:flex;align-items:center;justify-content:center;font-size:13px;flex-shrink:0;}
.card-h .ci.t{background:var(--teal-l);color:var(--teal);}
.card-h .ci.g{background:var(--gr-l);color:var(--gr-d);}
.card-h h3{font-size:14px;font-weight:700;color:var(--pu-d);flex:1;}
.card-h .ch-act{display:flex;gap:6px;align-items:center;flex-wrap:wrap;}

.ac{background:#fff;border:1px solid #d3e5e0;border-radius:16px;padding:14px 18px 12px;min-width:0;box-shadow:var(--sh);}
.ac-h{display:flex;align-items:center;gap:14px;padding-bottom:12px;border-bottom:1px solid #cfe3de;margin-bottom:10px;flex-wrap:wrap;}
.ac-ic{width:46px;height:46px;border-radius:14px;background:#eaf6f0;color:#14803c;display:flex;align-items:center;justify-content:center;font-size:19px;flex-shrink:0;}
.ac-h h3{font-size:16px;font-weight:600;color:#1d2b25;flex:1;min-width:120px;}
.ac-acts{display:flex;gap:6px;align-items:center;flex-wrap:wrap;}
.ib{width:34px;height:34px;border-radius:10px;border:1px solid #cfe3de;background:#fff;color:#14803c;display:flex;align-items:center;justify-content:center;font-size:14px;}
.ib:hover{background:#eaf6f0;}
.ib.add{background:#14803c;color:#fff;border-color:#14803c;}
.ib.add:hover{background:#0f6a31;}
.same-chk{display:flex;align-items:center;gap:6px;font-size:12px;font-weight:600;color:#1d2b25;cursor:pointer;white-space:nowrap;}
.same-chk input{width:15px;height:15px;accent-color:#14803c;}
.ac-blk{padding:2px 0;}
.ac-blk+.ac-blk{margin-top:8px;padding-top:8px;border-top:1px dashed #cfe3de;}
.ac-line{display:flex;gap:12px;align-items:flex-start;padding:5px 0;font-size:14px;color:#222;overflow-wrap:anywhere;line-height:1.45;}
.ac-line:before{content:"";width:9px;height:9px;border-radius:50%;background:#12803b;box-shadow:0 0 0 3px #e3f4ea;margin-top:7px;flex-shrink:0;}
.ac-line.b{font-weight:700;color:#111;}
.ac-empty{border:1.5px dashed #bfe0d2;background:#fbfefc;border-radius:12px;padding:16px;text-align:center;color:var(--muted);font-size:12.5px;}
.ac-empty i{display:block;font-size:24px;color:var(--gr);margin-bottom:4px;}
.ac-sub{font-size:11.5px;color:var(--muted);margin-top:8px;font-weight:500;}

.fgrid{display:grid;grid-template-columns:repeat(auto-fit,minmax(170px,1fr));gap:10px 12px;}
.fgrid.c2{grid-template-columns:1fr 1fr;}
.fgrid.c3{grid-template-columns:repeat(3,1fr);}
.fld{display:flex;flex-direction:column;gap:4px;min-width:0;position:relative;}
.fld>label{font-size:11.5px;font-weight:600;color:var(--pu-d);}
.fld>label .req{color:var(--red);}
.fld input,.fld select,.fld textarea{width:100%;height:38px;border:1px solid var(--line);border-radius:10px;padding:0 12px;background:#fff;outline:none;transition:border .15s,box-shadow .15s;}
.fld input[type=checkbox],.fld input[type=radio]{width:auto;height:auto;}
.fld textarea{height:auto;min-height:64px;padding:9px 12px;resize:vertical;}
.fld input:focus,.fld select:focus,.fld textarea:focus{border-color:var(--pu-m);box-shadow:0 0 0 3px rgba(91,47,168,.1);}
.fld input[readonly]{background:var(--pu-xl);}
.fld input.bal-dr{color:var(--gr-d);font-weight:700;}
.fld input.bal-cr{color:var(--red);font-weight:700;}
.fld select{appearance:none;-webkit-appearance:none;padding-right:30px;background:#fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='6'%3E%3Cpath d='M0 0l5 6 5-6z' fill='%235b2fa8'/%3E%3C/svg%3E") no-repeat right 12px center;cursor:pointer;}
.fld .with-btn{display:flex;gap:6px;}
.fld .with-btn>input,.fld .with-btn>select{flex:1;min-width:0;}
.fld .prefix{display:flex;align-items:center;border:1px solid var(--line);border-radius:10px;background:#fff;overflow:hidden;}
.fld .prefix select{flex:0 1 auto;width:auto;max-width:62%;height:36px;border:none;border-right:1px solid var(--line);border-radius:0;box-shadow:none;padding:0 26px 0 12px;font-weight:700;color:var(--pu);background-position:right 9px center;text-overflow:ellipsis;}
.fld .prefix input{flex:1;min-width:0;width:auto;border:none;box-shadow:none !important;padding-left:10px;}
.fld .unit{display:flex;gap:6px;}
.fld .unit select{width:104px;flex-shrink:0;}
.fld.sel-ro input{background:var(--pu-xl);font-weight:600;color:var(--pu-d);}
.fld .hsn-link{position:absolute;right:2px;top:0;font-size:10.5px;font-weight:700;color:var(--pu);cursor:pointer;display:flex;gap:4px;align-items:center;}

.btn{border:none;border-radius:10px;height:38px;padding:0 18px;font-weight:600;font-size:13px;display:inline-flex;align-items:center;justify-content:center;gap:8px;white-space:nowrap;transition:all .15s;}
.btn-p{background:var(--pu);color:#fff;}
.btn-p:hover{background:var(--pu-d);}
.btn-o{background:#fff;color:var(--pu);border:1.5px solid #c9b8ea;}
.btn-o:hover{background:var(--pu-l);border-color:var(--pu-m);}
.btn-g{background:linear-gradient(90deg,#2cc47a,#0f857f);color:#fff;}
.btn-g:hover{filter:brightness(.95);}
.btn-gl{background:#fff;color:var(--gr-d);border:1.5px solid var(--gr);}
.btn-gl:hover{background:var(--gr-l);}
.btn-sm{height:30px;padding:0 12px;font-size:12px;border-radius:8px;}
.btn-ic{width:38px;padding:0;flex-shrink:0;}
.btn-add{background:var(--gr);color:#fff;}
.btn-add:hover{background:var(--gr-d);}
.btn-del{background:#fdecec;color:var(--red);}
.btn-del:hover{background:#fbd5d5;}

.seg{display:inline-flex;background:var(--pu-xl);border:1px solid var(--line);border-radius:10px;padding:3px;gap:2px;}
.seg label{cursor:pointer;}
.seg input{display:none;}
.seg span{display:block;padding:5px 12px;border-radius:8px;font-size:12px;font-weight:600;color:var(--muted);}
.seg input:checked+span{background:var(--pu);color:#fff;}
.pm{display:flex;align-items:center;gap:6px;font-size:12px;font-weight:600;color:var(--pu-d);}
.pm select{height:32px;border:1px solid var(--line);border-radius:8px;padding:0 8px;background:#fff;font-weight:600;}

.tbl-wrap{overflow-x:auto;border-radius:10px;border:1px solid var(--line);}
table.items{width:100%;border-collapse:separate;border-spacing:0;min-width:1500px;table-layout:fixed;background:#fff;}
table.items thead th{background:var(--teal);color:#fff;font-size:11.5px;font-weight:600;padding:9px 6px;text-align:center;white-space:nowrap;border-right:1px solid rgba(255,255,255,.15);}
table.items thead th:last-child{border-right:none;}
table.items tbody td{padding:6px;border-bottom:1px solid var(--line);vertical-align:middle;background:#fff;}
table.items tbody tr:hover td{background:#fbfaff;}
table.items input,table.items select{width:100%;height:34px;border:1px solid var(--line);border-radius:8px;padding:0 8px;font-size:12px;background:#fff;outline:none;}
table.items input:focus,table.items select:focus{border-color:var(--pu-m);}
table.items td.num input{text-align:right;}
table.items td.ro{text-align:right;font-weight:600;font-size:12px;padding-right:10px;white-space:nowrap;}
table.items tfoot td{background:var(--teal-l);font-weight:700;padding:8px 6px;text-align:right;color:var(--teal-d);}
table.items.pay{min-width:900px;}
.p-led{width:300px;}
.p-date{width:150px;}
.p-amt{width:140px;}
.p-mode{width:160px;}
.p-ref{width:220px;}
.p-act{width:56px;text-align:center;}
.c-sr{width:46px;text-align:center;}
.c-item{width:280px;}
.c-grp{width:120px;}
.c-hsn{width:100px;}
.c-gd{width:120px;}
.c-uom{width:110px;}
.c-sku{width:95px;}
.c-qty{width:84px;}
.c-mrp{width:84px;}
.c-price{width:100px;}
.c-gst{width:80px;}
.c-d1,.c-d2{width:130px;}
.c-td{width:92px;}
.c-tx{width:104px;}
.c-tax{width:96px;}
.c-cess{width:84px;}
.c-tot{width:112px;}
.c-act{width:56px;text-align:center;}
.ibox{display:flex;gap:4px;position:relative;}
.ibox input{flex:1;}
.ibox select{flex:1;min-width:0;}
.ibox .btn{height:34px;width:34px;padding:0;border-radius:8px;flex-shrink:0;}
.dcell{display:flex;gap:4px;}
.dcell select{width:46px !important;flex-shrink:0;padding:0 2px !important;}
.row-delete{width:32px;height:32px;border:none;border-radius:8px;background:#fdecec;color:var(--red);}
#itemTable.h-d1 .c-d1,#itemTable.h-d2 .c-d2,#itemTable.h-td .c-td,#itemTable.h-sku .c-sku,#itemTable.h-mrp .c-mrp,#itemTable.h-gd .c-gd,#itemTable.h-grp .c-grp{display:none;}
#itemTable.h-desc .row-desc-wrap{display:none;}
#itemTable.h-ph .js-price-history{display:none;}
#itemTable.m-acc .c-uom,#itemTable.m-acc .c-gst,#itemTable.m-acc .c-hsn,#itemTable.m-acc .c-mrp{display:none;}
.row-desc-wrap{margin-top:4px;}

.upload{border:2px dashed #b9a3e3;background:var(--pu-xl);border-radius:12px;padding:14px;text-align:center;cursor:pointer;position:relative;transition:background .15s;}
.upload:hover,.upload.drag{background:var(--pu-l);}
.upload i{font-size:26px;color:var(--pu);}
.upload b{display:block;color:var(--pu-d);font-size:12.5px;margin-top:2px;}
.upload small{color:var(--muted);font-size:11px;}
.upload input{position:absolute;inset:0;opacity:0;cursor:pointer;}
.chips{display:flex;flex-wrap:wrap;gap:6px;margin-top:8px;}
.fchip{display:flex;align-items:center;gap:6px;background:#fff;border:1px solid var(--line);border-radius:8px;padding:4px 8px;font-size:11.5px;}
.fchip span{max-width:150px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
.fchip button{border:none;background:none;color:var(--red);}

.crow{display:grid;grid-template-columns:minmax(140px,2fr) 36px 52px minmax(60px,.8fr) minmax(80px,1fr) minmax(70px,.9fr) 74px 34px;gap:6px;align-items:center;margin-bottom:6px;min-width:640px;}
.crow.al{grid-template-columns:minmax(140px,2fr) 36px 84px minmax(90px,1fr) auto auto 74px 34px;}
.crow input,.crow select{height:34px;border:1px solid var(--line);border-radius:8px;padding:0 8px;width:100%;font-size:12px;}
.crow .tot{text-align:right;font-weight:700;color:var(--pu-d);}
.crow label{display:flex;align-items:center;gap:4px;font-size:11px;font-weight:600;white-space:nowrap;}
.crow label input{width:14px;height:14px;accent-color:var(--pu);}
.hscroll{overflow-x:auto;}
.sub-h{font-size:12.5px;font-weight:700;color:var(--pu-d);margin:12px 0 8px;display:flex;align-items:center;gap:8px;}
.sub-h i{color:var(--pu);}

.sum-card{padding:0;overflow:hidden;}
.sum-head{background:linear-gradient(90deg,var(--pu) 0,#8f6bd6 70%,#cdbbf0 100%);color:#fff;padding:11px 16px;display:flex;align-items:center;gap:10px;font-weight:700;font-size:14px;}
.sum-body{padding:10px 16px 14px;}
.srow{display:flex;justify-content:space-between;align-items:center;padding:4px 0;font-size:12.5px;font-weight:600;gap:8px;}
.srow span:last-child{font-variant-numeric:tabular-nums;}
.srow input{width:96px;height:30px;border:1px solid var(--line);border-radius:8px;text-align:right;padding:0 8px;}
.srow .dual{display:flex;gap:6px;}
.srow .dual input.pct{width:58px;}
.srow .dual input.amt{width:92px;background:var(--pu-xl);}
.auto{font-size:10px;font-weight:700;color:var(--pu);background:var(--pu-l);border:none;border-radius:8px;padding:2px 8px;margin-left:6px;}
.grand{display:flex;justify-content:space-between;align-items:center;background:var(--pu-l);border-radius:12px;padding:11px 14px;margin-top:8px;color:var(--pu);font-weight:700;font-size:16px;}

.tw{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:10px;}
.tw label{display:flex;align-items:center;gap:8px;background:var(--pu-xl);border:1px solid var(--line);border-radius:10px;padding:7px 12px;font-weight:600;font-size:12px;cursor:pointer;}
.tw label:has(input:checked){background:var(--pu-l);border-color:var(--pu-m);color:var(--pu);}
.tw input{accent-color:var(--pu);}
.partb{background:var(--pu-xl);border:1px dashed var(--pu-m);border-radius:12px;padding:10px;margin-top:6px;display:none;}
.partb.show{display:block;}
.partb-h{text-align:center;color:var(--pu);font-weight:700;font-size:12px;margin-bottom:8px;letter-spacing:.4px;}

.pay-card{margin-bottom:12px;}
.pay-toggle{width:100%;background:none;border:none;text-align:left;margin-bottom:0;padding:0;color:inherit;}
.pay-sum{font-size:13px;font-weight:700;color:var(--pu);margin-right:6px;white-space:nowrap;}
.pay-chev{color:var(--pu);font-size:12px;transition:transform .2s ease;}
.pay-card.open .pay-chev{transform:rotate(180deg);}
.pay-body{margin-top:12px;}

.bar{position:fixed;left:236px;right:0;bottom:0;background:#fff;box-shadow:0 -4px 18px rgba(80,60,160,.1);padding:10px 18px;display:grid;grid-template-columns:1fr 1fr 1.3fr .9fr;gap:12px;z-index:800;transition:left .25s;}
.bar.collapsed{left:64px;}
.bar .btn{height:40px;width:100%;}

.modal-overlay{position:fixed;inset:0;background:rgba(30,20,60,.5);backdrop-filter:blur(3px);display:none;align-items:center;justify-content:center;padding:18px;z-index:4000;}
.modal-overlay.show{display:flex;animation:fade .18s;}
.modal-overlay.top{z-index:4100;}
.modal-overlay.top2{z-index:4200;}
@keyframes fade{from{opacity:0}to{opacity:1}}
@keyframes rise{from{transform:translateY(14px);opacity:0}to{transform:none;opacity:1}}
.modal-box{background:#fff;border-radius:18px;box-shadow:0 24px 60px rgba(31,29,61,.28);width:100%;max-width:560px;max-height:90vh;display:flex;flex-direction:column;overflow:hidden;animation:rise .22s;}
.modal-box.w6{max-width:640px;}
.modal-box.w7{max-width:780px;}
.modal-head{display:flex;align-items:center;gap:12px;padding:14px 18px;border-bottom:1px solid var(--line);background:linear-gradient(90deg,var(--pu-xl),#fff);position:relative;}
.mh-ic{width:38px;height:38px;border-radius:12px;background:var(--pu);color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0;}
.mh-ic.g{background:var(--gr);}
.mh-ic.t{background:var(--teal);}
.modal-head h4{font-size:15px;font-weight:700;color:var(--pu-d);line-height:1.2;}
.mh-sub{font-size:11.5px;color:var(--muted);}
.mh-txt{flex:1;min-width:0;}
.mh-acts{display:flex;align-items:center;gap:6px;}
.mh-btn{width:32px;height:32px;border:1px solid var(--line);border-radius:9px;background:#fff;color:var(--muted);font-size:13px;}
.mh-btn:hover,.mh-btn.active{color:var(--pu);border-color:var(--pu-m);}
.mh-fetch{background:var(--gr);color:#fff;border:none;border-radius:9px;padding:0 12px;height:32px;font-size:11.5px;font-weight:700;display:flex;align-items:center;gap:6px;white-space:nowrap;}
.modal-close{width:32px;height:32px;border:none;border-radius:9px;background:transparent;color:var(--muted);font-size:16px;}
.modal-close:hover{background:var(--pu-l);color:var(--pu);}
.modal-body{padding:16px 18px;overflow-y:auto;flex:1;}
.modal-foot{display:flex;align-items:center;justify-content:flex-end;gap:10px;padding:12px 18px;border-top:1px solid var(--line);background:#faf9fe;flex-wrap:wrap;}
.modal-foot .push{margin-right:auto;}
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
.settings-panel{display:none;position:absolute;top:54px;right:56px;width:270px;max-height:340px;overflow-y:auto;background:#fff;border:1px solid var(--line);border-radius:12px;box-shadow:0 12px 32px rgba(31,29,61,.18);z-index:20;padding:4px 0;}
.settings-panel.show{display:block;}
.sp-title{font-size:10.5px;font-weight:700;color:var(--pu);text-transform:uppercase;letter-spacing:.3px;padding:8px 12px;border-bottom:1px solid var(--line);}
.sp-item{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:7px 12px;font-size:12px;}
.sp-item:hover{background:var(--pu-xl);}
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
.cfg-sec{font-size:12px;font-weight:700;color:var(--teal-d);text-transform:uppercase;letter-spacing:.4px;margin:14px 0 8px;display:flex;align-items:center;gap:8px;}
.cfg-sec:first-child{margin-top:0;}
.cfg-sec:after{content:"";flex:1;height:1px;background:var(--line);}
.cfg-list{display:grid;grid-template-columns:1fr 1fr;gap:8px;}
.itt{display:inline-flex;border:1px solid var(--line);border-radius:10px;overflow:hidden;}
.itt button{border:none;background:#fff;padding:8px 22px;font-weight:600;font-size:12.5px;color:var(--muted);}
.itt button.on{background:var(--pu);color:#fff;}
.chk{display:flex;align-items:center;gap:8px;font-size:12px;font-weight:600;color:var(--pu-d);cursor:pointer;}
.chk input{width:15px;height:15px;accent-color:var(--pu);}
.img-row{display:flex;gap:10px;flex-wrap:wrap;align-items:flex-start;}
.img-main{width:78px;height:78px;border:1.5px dashed #b9a3e3;border-radius:12px;background:var(--pu-xl);display:flex;align-items:center;justify-content:center;overflow:hidden;cursor:pointer;color:var(--pu);font-size:20px;flex-shrink:0;}
.img-main img{width:100%;height:100%;object-fit:cover;}
.img-hint{font-size:10.5px;color:var(--muted);max-width:140px;}
.img-add-row{display:flex;gap:8px;flex-wrap:wrap;margin-top:6px;}
.img-tile{width:58px;height:58px;border:1.5px dashed #b9a3e3;border-radius:10px;background:#fff;color:var(--pu);display:flex;align-items:center;justify-content:center;font-size:14px;position:relative;overflow:hidden;cursor:pointer;flex-shrink:0;}
.img-tile img{width:100%;height:100%;object-fit:cover;}
.img-x{position:absolute;top:2px;right:2px;width:16px;height:16px;background:var(--red);color:#fff;border:none;border-radius:50%;font-size:10px;line-height:1;}
.os-row{display:grid;grid-template-columns:1fr 1fr;gap:10px;background:var(--pu-xl);border:1px solid var(--line);border-radius:12px;padding:10px;margin-bottom:10px;}
.os-sum{display:grid;grid-template-columns:1fr 1fr;gap:10px;background:var(--pu-l);border:1px dashed var(--pu-m);border-radius:12px;padding:10px;margin-top:10px;}

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

.sr{position:fixed;background:#fff;border:1px solid var(--pu-m);border-radius:12px;box-shadow:0 12px 28px rgba(60,40,140,.2);max-height:290px;overflow-y:auto;display:none;z-index:5000;}
.sr.show{display:block;}
.sr .it{padding:8px 12px;cursor:pointer;border-bottom:1px solid var(--line);display:flex;justify-content:space-between;gap:8px;align-items:center;font-size:12px;}
.sr .it:last-child{border-bottom:none;}
.sr .it:hover,.sr .it.act{background:var(--pu-l);color:var(--pu);}
.sr .it b{font-weight:600;}
.sr .it small{color:var(--muted);font-size:11px;white-space:nowrap;}
.sr .it .sub{display:block;color:var(--pu);font-size:11px;font-weight:600;}
.sr .empty{padding:10px;text-align:center;color:var(--muted);font-size:12px;}
.gsl{width:100%;border-collapse:collapse;min-width:560px;}
.gsl th{background:var(--teal);color:#fff;padding:8px;font-size:11.5px;}
.gsl td{padding:7px;text-align:center;border-bottom:1px solid var(--line);font-size:12px;}
.gsl input{width:80px;height:30px;border:1px solid var(--line);border-radius:8px;padding:0 6px;text-align:center;}
.gsl.ph{min-width:860px;}
.gsl.ph th select{display:block;margin:4px auto 0;height:24px;border:none;border-radius:6px;padding:0 4px;font-size:11px;font-weight:600;background:#fff;color:var(--teal-d);outline:none;}
.ph-head-sw{padding:4px 6px 4px 12px;border:1px solid var(--line);background:#fff;font-size:12px;white-space:nowrap;}
.pos{color:var(--gr-d);font-weight:700;}
.neg{color:var(--red);font-weight:700;}
.toast-stack{position:fixed;top:14px;right:14px;z-index:6000;display:flex;flex-direction:column;gap:8px;}
.toast{background:#2a2447;color:#fff;padding:10px 16px;border-radius:12px;font-size:12.5px;font-weight:500;box-shadow:0 8px 22px rgba(0,0,0,.25);display:flex;align-items:center;gap:10px;min-width:220px;animation:rise .2s;}
.toast i{color:#ffb36b;}

@media(max-width:1100px){.g-top,.g-party,.g-bottom{grid-template-columns:1fr 1fr;}.g-party>.card:first-child{grid-column:1/-1;}}
@media(max-width:768px){
  .g-top,.g-party,.g-bottom,.fgrid.c2,.fgrid.c3,.cfg-list,.os-row,.os-sum{grid-template-columns:1fr;}
  .bar,.bar.collapsed{left:0;grid-template-columns:1fr 1fr;padding:10px 12px;}
  .content{padding:10px 10px 130px;}
  .modal-overlay{padding:0;align-items:flex-end;}
  .modal-box,.modal-box.w6,.modal-box.w7,.bank-box{max-width:100%;border-radius:18px 18px 0 0;max-height:94vh;}
  .settings-panel{right:16px;}
  .ph-head-sw span{display:none;}
}
@media(max-width:768px){
  .g-bottom{display:flex;flex-direction:column;}
  .g-bottom>.stack{display:contents;}
  .g-bottom>.stack>.grow{flex:none;}
  #sumSec{order:1;}
  #bankSec{order:2;}
  #uploadSec{order:3;}
  #chargesSec{order:4;}
  #termsSec{order:5;}
  #noteSec{order:6;}
  #transportSec{order:7;}
}
@media print{.bar,.sidebar,.topbar,.tab-tools,.hk-hero,.ctrl-drawer,.ctrl-overlay{display:none !important;}.main{margin:0;}}
@media(max-width:768px){
  .card-h:has(#scanBarcodeBtn){
    display:grid;
    grid-template-columns:30px minmax(0,1fr) auto;
    align-items:center;
    gap:8px;
  }

  .card-h:has(#scanBarcodeBtn) .ch-act{
    display:contents;
  }

  .card-h:has(#scanBarcodeBtn) #scanBarcodeBtn{
    grid-column:3;
    grid-row:1;
    justify-self:end;
    margin-left:auto;
  }

  .card-h:has(#scanBarcodeBtn) .seg,
  .card-h:has(#scanBarcodeBtn) .pm{
    grid-column:1/-1;
    width:max-content;
    max-width:100%;
  }
}
.sec-t{font-size:11.5px;font-weight:700;color:var(--pu-d);text-transform:uppercase;letter-spacing:.3px;padding-bottom:6px;margin:16px 0 10px;border-bottom:1px solid var(--line);}
.sec-t:first-child{margin-top:0;}
.sw.f38{min-height:38px;background:#fff;border:1px solid var(--line);border-radius:10px;}
.fld>label.sp{visibility:hidden;}
</style>
</head>
<body>
<div class="overlay-bg" id="overlayBg"></div>
<div class="toast-stack" id="toastStack"></div>
<div class="sr" id="itemSr"></div>
<div class="sr" id="partySr"></div>
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
    <button class="round-btn" id="prevTxnBtn" type="button" title="Previous"><i class="fa-solid fa-angle-left"></i></button>
    <button class="round-btn" id="nextTxnBtn" type="button" title="Next"><i class="fa-solid fa-angle-right"></i></button>
    <button class="round-btn" id="configBtn" type="button" title="Sale Configuration"><i class="fa-solid fa-gear"></i></button>
  </div>

  <form id="saleForm" onsubmit="return false;">

    <div class="grid g-top">
      <div class="card">
        <div class="card-h"><span class="ci"><i class="fa-solid fa-file-lines"></i></span><h3>Invoice Details</h3></div>
        <div class="fgrid c2">
          <div class="fld"><label>Invoice Number <span class="req">*</span></label><div class="prefix"><select id="invoiceSeries" aria-label="Invoice series"></select><input type="text" id="invoiceNumber" value="30"></div></div>
          <div class="fld"><label>Invoice Date <span class="req">*</span></label><input type="date" id="invoiceDate" value="2026-09-05"></div>
          <div class="fld" id="fCredit" hidden><label>Credit Period</label><div class="unit"><input type="number" id="creditPeriodValue" min="0" value="0"><select id="creditPeriodUnit"><option>Days</option><option>Month</option></select></div></div>
          <div class="fld" id="fSaleOrder" hidden><label>Sales Order</label><input type="number" id="estimateSaleInputValue" min="0" max="100" step="0.01" value="50"></div>
          <div class="fld" id="fQuote" hidden><label>Select Estimate / Quotation No.</label><select id="estimateQuotationNumberSelect"><option value="">Select</option></select></div>
        </div>
      </div>

      <div class="ac">
        <div class="ac-h"><span class="ac-ic"><i class="fa-solid fa-boxes-packing"></i></span><h3>Dispatch Address</h3>
          <div class="ac-acts"><button type="button" class="ib" data-addr="dispatch" data-mode="select" title="Select / Edit"><i class="fa-solid fa-pen-to-square"></i></button><button type="button" class="ib add" data-addr="dispatch" data-mode="add" title="Add address"><i class="fa-solid fa-plus"></i></button></div></div>
        <div id="dispatchCard"></div>
      </div>
    </div>

    <div class="grid g-party">
      <div class="card">
        <div class="card-h"><span class="ci"><i class="fa-solid fa-users"></i></span><h3>Party Details</h3></div>
        <div class="fgrid">
          <div class="fld" style="grid-column:1/-1;"><label>Party <span class="req">*</span></label>
            <div class="with-btn"><input type="text" id="partySearchInput" placeholder="Search party..." autocomplete="off"><button type="button" class="btn btn-add btn-ic" data-open="addPartyModal" title="Add party"><i class="fa-solid fa-plus"></i></button></div>
            <input type="hidden" id="partySelect" value="">
          </div>
          <div class="fld"><label>GSTIN</label><div class="with-btn"><input type="text" id="partyGstin" maxlength="15"><button type="button" class="btn btn-p btn-ic" id="fetchPartyGstBtn" title="Fetch GSTIN details"><i class="fa-solid fa-magnifying-glass"></i></button></div></div>
          <div class="fld"><label>Party Mobile</label><input type="text" id="partyMobile" maxlength="10"></div>
          <div class="fld" style="grid-column:1/-1;"><label>Party Current Balance</label><input type="text" id="partyBalance" readonly placeholder="Select a party to view balance"></div>
        </div>
      </div>

      <div class="ac">
        <div class="ac-h"><span class="ac-ic"><i class="fa-solid fa-building"></i></span><h3>Billing Address</h3>
          <div class="ac-acts"><button type="button" class="ib" data-addr="billing" data-mode="select" title="Select / Edit"><i class="fa-solid fa-pen-to-square"></i></button><button type="button" class="ib add" data-addr="billing" data-mode="add" title="Add address"><i class="fa-solid fa-plus"></i></button></div></div>
        <div id="billingCard"></div>
      </div>

      <div class="ac">
        <div class="ac-h"><span class="ac-ic"><i class="fa-solid fa-truck"></i></span><h3>Shipping Address</h3>
          <div class="ac-acts"><label class="same-chk"><input type="checkbox" id="shipSameAsBilling" checked> Same as Billing</label><button type="button" class="ib" data-addr="shipping" data-mode="select" title="Select / Edit"><i class="fa-solid fa-pen-to-square"></i></button><button type="button" class="ib add" data-addr="shipping" data-mode="add" title="Add address"><i class="fa-solid fa-plus"></i></button></div></div>
        <div id="shippingCard"></div>
        <div class="ac-sub" id="shippingSummary"></div>
      </div>
    </div>

    <div class="card" style="margin-bottom:12px;">
      <div class="card-h"><span class="ci t"><i class="fa-solid fa-cube"></i></span><h3>Item Details</h3>
        <div class="ch-act">
          <button type="button" class="btn btn-o btn-sm" id="scanBarcodeBtn" title="Scan barcode"><i class="fa-solid fa-barcode"></i> Scan</button>
          <div class="seg"><label><input type="radio" name="invoiceMode" value="item" checked><span>Item Invoice</span></label><label><input type="radio" name="invoiceMode" value="accounting"><span>Accounting Invoice</span></label></div>
          <div class="pm">Price Mode: <select id="unitPriceMode"><option value="without">Without Tax</option><option value="with">With Tax</option></select></div>
        </div>
      </div>
      <div class="tbl-wrap">
        <table class="items h-d1 h-d2 h-td h-sku h-mrp h-desc h-gd h-grp h-ph" id="itemTable">
          <thead><tr>
            <th class="c-sr">Sr No.</th><th class="c-item" id="itemColHeader">Item Name</th><th class="c-grp">Item Group</th><th class="c-hsn">HSN / SAC</th><th class="c-gd">Godown</th><th class="c-uom">UOM</th><th class="c-sku">SKU</th><th class="c-qty">Quantity</th><th class="c-mrp">MRP</th><th class="c-price">Unit Price</th><th class="c-gst">Tax Rate</th><th class="c-d1">Discount 1</th><th class="c-d2">Discount 2</th><th class="c-td">Total Disc.</th><th class="c-tx">Taxable Amt.</th><th class="c-tax">Tax</th><th class="c-cess">CESS</th><th class="c-tot">Total</th><th class="c-act">Action</th>
          </tr></thead>
          <tbody id="itemTableBody"></tbody>
          <tfoot><tr>
            <td class="c-sr"></td><td class="c-item" style="text-align:left;"><button type="button" class="btn btn-add btn-sm" id="addLineBtn"><i class="fa-solid fa-plus"></i> Add Item</button></td><td class="c-grp"></td><td class="c-hsn"></td><td class="c-gd"></td><td class="c-uom"></td><td class="c-sku"></td><td class="c-qty" id="footQty">0.00</td><td class="c-mrp"></td><td class="c-price"></td><td class="c-gst"></td><td class="c-d1"></td><td class="c-d2"></td><td class="c-td"></td><td class="c-tx" id="footTaxable">0.00</td><td class="c-tax" id="footTax">0.00</td><td class="c-cess" id="footCess">0.00</td><td class="c-tot" id="footTotal">0.00</td><td class="c-act"></td>
          </tr></tfoot>
        </table>
      </div>
    </div>

    <div class="grid g-bottom">
      <div class="stack">
        <div class="card" id="bankSec">
          <div class="card-h"><span class="ci t"><i class="fa-solid fa-building-columns"></i></span><h3>Bank Details</h3></div>
          <div class="fld"><label>Bank</label><div class="with-btn"><select id="bankSelect" data-entity="bank"></select><button type="button" class="btn btn-add btn-ic" id="addBankBtn" title="Add bank"><i class="fa-solid fa-plus"></i></button></div></div>
        </div>
        <div class="card" id="uploadSec">
          <div class="card-h"><span class="ci"><i class="fa-solid fa-cloud-arrow-up"></i></span><h3>Upload Document</h3></div>
          <div class="upload" id="uploadBox"><i class="fa-solid fa-cloud-arrow-up"></i><b>Drag &amp; drop files here or click to upload</b><small>Supported formats: Images, PDF, DOCX, XLSX</small><input type="file" id="docUpload" multiple accept="image/*,.pdf,.docx,.xlsx"></div>
          <div class="chips" id="uploadList"></div>
        </div>
        <div class="card grow" id="chargesSec">
          <div class="card-h"><span class="ci"><i class="fa-solid fa-plus"></i></span><h3>Additional Charges</h3><div class="ch-act"><button type="button" class="btn btn-gl btn-sm" id="addChargeBtn"><i class="fa-solid fa-plus"></i> Add Charge</button></div></div>
          <div class="hscroll"><div id="additionalChargesRows"></div></div>
          <div class="sub-h"><i class="fa-solid fa-scale-balanced"></i> Add / Less <button type="button" class="btn btn-gl btn-sm" id="addLessBtn" style="margin-left:auto;"><i class="fa-solid fa-plus"></i> Add / Less</button></div>
          <div class="hscroll"><div id="addLessRows"></div></div>
        </div>
        <div class="card" id="termsSec" hidden>
          <div class="card-h"><span class="ci"><i class="fa-solid fa-file-contract"></i></span><h3>Terms &amp; Conditions</h3></div>
          <div class="fld"><label>Terms &amp; Conditions</label><textarea id="termsText" rows="3" placeholder="Enter Terms & Conditions..."></textarea></div>
        </div>
        <div class="card" id="noteSec" hidden>
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
            <div class="srow" id="tcsRow" hidden><span>TCS</span><div class="dual"><input type="number" id="tcsPctInput" class="pct" value="0" step="0.01" min="0" placeholder="%" title="TCS %"><input type="number" id="tcsAmountInput" class="amt" value="0" step="0.01" readonly placeholder="Amount" title="TCS Amount"></div></div>
            <div class="srow" id="tdsRow" hidden><span>TDS</span><div class="dual"><input type="number" id="tdsPctInput" class="pct" value="0" step="0.01" min="0" placeholder="%" title="TDS %"><input type="number" id="tdsAmountInput" class="amt" value="0" step="0.01" readonly placeholder="Amount" title="TDS Amount"></div></div>
            <div class="srow"><span>Additional Charges</span><span id="sumCharges">₹ 0.00</span></div>
            <div class="srow"><span>Add / Less</span><span id="sumAddLess">₹ 0.00</span></div>
            <div class="srow"><span>Round Off <button type="button" class="auto" id="autoRoundBtn">Auto</button></span><input type="number" id="roundOffInput" value="0" step="0.01"></div>
            <div class="grand"><span>Grand Total</span><span id="sumGrand">₹ 0.00</span></div>
          </div>
        </div>
        <div class="card grow" id="transportSec">
          <div class="card-h"><span class="ci"><i class="fa-solid fa-truck-ramp-box"></i></span><h3>Transport &amp; E-Way / E-Invoice</h3></div>
          <div class="tw">
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
              <div class="fld"><label>Transporter Name</label><div class="with-btn"><select id="transporterSelect" data-entity="transporter"></select><button type="button" class="btn btn-add btn-ic" data-quick="transporter" title="Add transporter"><i class="fa-solid fa-plus"></i></button></div></div>
              <div class="fld"><label>Transporter GSTIN</label><input type="text" id="transporterGstin" maxlength="15"></div>
              <div class="fld"><label>Transporter Mode</label><select id="transporterMode"><option value="Road" selected>Road</option><option value="Rail">Rail</option><option value="Air">Air</option><option value="Ship">Ship</option></select></div>
              <div class="fld"><label>Document Date</label><input type="date" id="documentDate"></div>
              <div class="fld"><label>Document Number</label><input type="text" id="documentNumber"></div>
              <div class="fld"><label>Vehicle Number</label><input type="text" id="vehicleNumber" placeholder="e.g. TR01AB1234"></div>
              <div class="fld"><label>Transaction Type</label><select id="transactionType"><option value="Regular" selected>Regular</option><option value="Bill To - Ship To">Bill To - Ship To</option><option value="Bill From - Ship From">Bill From - Ship From</option><option value="Combination">Combination</option></select></div>
              <div class="fld"><label>Vehicle Type</label><select id="vehicleType"><option value="Regular" selected>Regular</option><option value="ODC">ODC</option></select></div>
              <div class="fld"><label>Distance</label><input type="text" id="distance"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card pay-card" id="paymentSec" hidden>
      <button type="button" class="card-h pay-toggle" id="payToggle" aria-expanded="false" aria-controls="payBody">
        <span class="ci g"><i class="fa-solid fa-wallet"></i></span><h3>Payment Details</h3><span class="pay-sum" id="paySummary">₹ 0.00</span><i class="fa-solid fa-chevron-down pay-chev"></i>
      </button>
      <div class="pay-body" id="payBody" hidden>
        <div class="tbl-wrap">
          <table class="items pay" id="payTable">
            <thead><tr>
              <th class="p-led">Payment Ledger</th><th class="p-date">Date</th><th class="p-amt">Amount</th><th class="p-mode">Mode</th><th class="p-ref">Reference Number</th><th class="p-act">Action</th>
            </tr></thead>
            <tbody id="payTableBody"></tbody>
            <tfoot><tr>
              <td class="p-led" style="text-align:left;"><button type="button" class="btn btn-add btn-sm" id="addPayRowBtn"><i class="fa-solid fa-plus"></i> Add Payment</button></td><td class="p-date"></td><td class="p-amt" id="payFootTotal">0.00</td><td class="p-mode"></td><td class="p-ref"></td><td class="p-act"></td>
            </tr></tfoot>
          </table>
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

<div id="dynModals"></div>

<div class="modal-overlay top" id="addBankModal">
  <div class="modal-box bank-box">
    <div class="bank-head"><h4>Add Bank Account</h4><button type="button" class="modal-close" data-close aria-label="Close"><i class="fa-solid fa-xmark"></i></button></div>
    <div class="bank-body">
      <form id="addBankForm" onsubmit="return false;" autocomplete="off">
        <div class="fgrid c2">
          <div class="fld" style="grid-column:1/-1;"><label>Account Type <span class="req">*</span></label>
            <select id="bankAccountType"><option value="">Select Account Type</option><option value="Savings Account">Savings Account</option><option value="Current Account">Current Account</option><option value="Cash Credit Account">Cash Credit Account</option><option value="Overdraft Account">Overdraft Account</option><option value="Loan Account">Loan Account</option><option value="Fixed Deposit Account">Fixed Deposit Account</option></select></div>
          <div class="fld"><label>Account Holder Name</label><input type="text" id="bankHolderName" placeholder="Enter account holder name"></div>
          <div class="fld"><label>IFSC Code</label><input type="text" id="bankIfsc" maxlength="11" placeholder="Enter IFSC code"></div>
          <div class="fld"><label>Bank Name <span class="req">*</span></label><input type="text" id="bankName" placeholder="Enter bank name"></div>
          <div class="fld"><label>Branch Name</label><input type="text" id="bankBranch" placeholder="Enter branch name"></div>
          <div class="fld"><label>Account Number <span class="req">*</span></label><input type="text" id="bankAccountNumber" placeholder="Enter account number"></div>
          <div class="fld"><label>Opening Balance From <span class="req">*</span></label><input type="date" id="bankObDate"></div>
          <div class="fld"><label>Opening Balance Amount <span class="req">*</span></label><input type="number" id="bankObAmount" step="0.01" placeholder="0.00"></div>
          <div class="fld"><label>Opening Balance Type <span class="req">*</span></label>
            <select id="bankObType"><option value="">Select Balance Type</option><option value="Dr">Debit</option><option value="Cr">Credit</option></select></div>
        </div>
      </form>
    </div>
    <div class="bank-foot"><button type="button" class="btn-bs" id="saveBankBtn">Save</button><button type="button" class="btn-bc" data-close>Cancel</button></div>
  </div>
</div>

<div class="modal-overlay top" id="payLedgerModal">
  <div class="modal-box">
    <div class="modal-head"><span class="mh-ic g"><i class="fa-solid fa-book"></i></span><div class="mh-txt"><h4>Add Payment Ledger</h4><p class="mh-sub">Create a ledger to use for this payment</p></div><button type="button" class="modal-close" data-close><i class="fa-solid fa-xmark"></i></button></div>
    <div class="modal-body">
      <div class="fgrid c2">
        <div class="fld"><label>Ledger Name <span class="req">*</span></label><input type="text" id="plName" placeholder="Enter ledger name"></div>
        <div class="fld"><label>Group <span class="req">*</span></label><div class="with-btn"><select id="plGroup"></select><button type="button" class="btn btn-add btn-ic" id="plAddGroupBtn" title="Add group"><i class="fa-solid fa-plus"></i></button></div></div>
      </div>
    </div>
    <div class="modal-foot"><button type="button" class="btn btn-o" data-close>Cancel</button><button type="button" class="btn btn-p" id="savePayLedgerBtn"><i class="fa-solid fa-check"></i> Save</button></div>
  </div>
</div>

<div class="modal-overlay top2" id="payGroupModal">
  <div class="modal-box">
    <div class="modal-head"><span class="mh-ic t"><i class="fa-solid fa-layer-group"></i></span><div class="mh-txt"><h4>Add Group</h4><p class="mh-sub">Create a new ledger group</p></div><button type="button" class="modal-close" data-close><i class="fa-solid fa-xmark"></i></button></div>
    <div class="modal-body">
      <div class="fgrid c2">
        <div class="fld"><label>Group Name <span class="req">*</span></label><input type="text" id="plgName" placeholder="Enter group name"></div>
        <div class="fld"><label>Parent Group</label><select id="plgParent"></select></div>
      </div>
    </div>
    <div class="modal-foot"><button type="button" class="btn btn-o" data-close>Cancel</button><button type="button" class="btn btn-p" id="savePayGroupBtn"><i class="fa-solid fa-check"></i> Save</button></div>
  </div>
</div>

<div class="modal-overlay" id="addPartyModal">
  <div class="modal-box w7">
    <div class="modal-head"><span class="mh-ic"><i class="fa-solid fa-user-plus"></i></span><div class="mh-txt"><h4>Add Customer</h4><p class="mh-sub">Create a new party and use it on this invoice</p></div><div class="mh-acts"><button type="button" class="mh-fetch" id="fetchGstinPartyBtn" title="Fetch GSTIN details"><i class="fa-solid fa-magnifying-glass"></i> Fetch GSTIN Details</button><button type="button" class="modal-close" data-close><i class="fa-solid fa-xmark"></i></button></div></div>
    <div class="modal-body">
      <div class="tabs"><button type="button" class="on" data-tab="pb">Customer Basic Details</button><button type="button" data-tab="pa">Billing Address</button><button type="button" data-tab="pf">Balance &amp; Credit</button></div>
      <div class="tp on" data-p="pb"><div class="fgrid c2">
        <div class="fld"><label>Registration Type</label><select id="newPartyRegType"><option value="">Select Registration Type</option><option value="regular">Registered Business - Regular</option><option value="unregistered">Unregistered Business</option><option value="composition">Registered Business - Composition</option><option value="tds">Tax Deductor / Tax Collector</option><option value="consumer">Consumer</option></select></div>
        <div class="fld" id="newPartyGstPanGroup" hidden><label id="newPartyGstPanLabel">GST Number</label><input type="text" id="newPartyGstin" maxlength="15"></div>
        <div class="fld"><label>Legal Name <span class="req">*</span></label><input type="text" id="newPartyName"></div>
        <div class="fld" id="newPartyTradeGroup" hidden><label>Trade Name</label><input type="text" id="newPartyTradeName"></div>
        <div class="fld"><label>Business Entity</label><select id="newPartyEntity"><option value="">Select entity</option><option value="Proprietorship">Proprietorship</option><option value="HUF">HUF</option><option value="Partnership Firm">Partnership Firm</option><option value="LLP">LLP</option><option value="Private Limited Company">Private Limited Company</option><option value="Public Limited Company">Public Limited Company</option><option value="AOP">AOP</option><option value="Trust">Trust</option><option value="Others">Others</option></select></div>
        <div class="fld"><label>PAN Details</label><input type="text" id="newPartyPan"></div>
        <div class="fld"><label>Email</label><input type="email" id="newPartyEmail"></div>
        <div class="fld"><label>Mobile Number</label><input type="text" id="newPartyPhone1" maxlength="10"></div>
      </div></div>
      <div class="tp" data-p="pa"><div class="fgrid c2">
        <div class="fld"><label>Address 1</label><input type="text" id="newPartyAddr1"></div>
        <div class="fld"><label>Address 2 (Optional)</label><input type="text" id="newPartyAddr2"></div>
        <div class="fld"><label>Place</label><input type="text" id="newPartyPlace"></div>
        <div class="fld"><label>City</label><input type="text" id="newPartyCity"></div>
        <div class="fld"><label>Pin Code <span class="req">*</span></label><input type="text" id="newPartyPincode" maxlength="6"></div>
        <div class="fld"><label>State <span class="req">*</span></label><select id="newPartyState" data-entity="state"></select></div>
        <div class="fld"><label>Country <span class="req">*</span></label><select id="newPartyCountry" data-entity="country"></select></div>
      </div></div>
      <div class="tp" data-p="pf"><div class="fgrid c2">
        <div class="fld"><label>Opening Balance Date</label><input type="date" id="newPartyObDate"></div>
        <div class="fld"><label>Opening Balance (Amount) <span class="req">*</span></label><input type="number" step="0.01" id="newPartyObAmount" value="0.00"></div>
        <div class="fld"><label>Balance Type</label><div class="seg" style="width:fit-content;"><label><input type="radio" name="newPartyObType" value="Dr" checked><span>Debit</span></label><label><input type="radio" name="newPartyObType" value="Cr"><span>Credit</span></label></div></div>
        <div class="fld"><label>Allowed Credit Limit</label><input type="number" step="0.01" id="newPartyCreditLimit" value="0.00"></div>
      </div></div>
    </div>
    <div class="modal-foot"><button type="button" class="btn btn-o" data-close>Cancel</button><button type="button" class="btn btn-p" id="savePartyBtn"><i class="fa-solid fa-check"></i> Save Customer</button></div>
  </div>
</div>

<div class="modal-overlay" id="addItemModal">
  <div class="modal-box w6">
    <div class="modal-head">
      <div class="mh-txt"><h4>Add Item</h4></div>
      <div class="mh-acts"><button type="button" class="mh-btn" id="itemFieldSettingsBtn" title="Additional Fields"><i class="fa-solid fa-gear"></i></button><button type="button" class="modal-close" data-close><i class="fa-solid fa-xmark"></i></button></div>
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
          <div class="fld"><label>Primary UOM <span class="req">*</span></label><select id="newItemPrimaryUom" data-entity="uom"></select></div>
          <div class="fld opt-field" data-field="secondary_uom"><label>Secondary UOM</label><select id="newItemSecondaryUom" data-entity="uom2"></select></div>
          <label class="chk" style="grid-column:1/-1;"><input type="checkbox" id="newItemDescSameAsName"> Item Description Same as Item Name</label>
          <div class="fld" style="grid-column:1/-1;"><label>Item Description</label><input type="text" id="newItemDescription"></div>
        </div>

        <div class="sec-t">GST Details</div>
        <div class="fgrid c2">
          <div class="fld"><label>GST Rate <span class="req">*</span></label><select id="newItemGstRate"></select></div>
          <div class="fld"><label>HSN Code</label><input type="text" id="newItemHsn" maxlength="8"></div>
          <div class="fld"><label class="sp">RCM</label><div class="sw f38"><span>RCM Available</span><label class="tg"><input type="checkbox" id="newItemRcmToggle"><i></i></label></div></div>
          <div class="fld opt-field" data-field="cess"><label>GST CESS Rate</label><select id="newItemCessRate"></select></div>
          <div class="fld" style="grid-column:1/-1;"><label>HSN Code Details</label><input type="text" id="newItemHsnDesc" readonly></div>
        </div>

        <div class="sec-t">Stock Details</div>
        <div class="fgrid c2">
          <div class="fld"><label>Opening Stock Date</label><input type="date" id="newItemOpeningDate"></div>
          <div class="fld opt-field" data-field="rate_decimal"><label>Decimal Place For Rate</label><input type="number" id="newItemDecimalRate" min="0" max="5"></div>
          <div class="fld"><label>Stock Quantity</label><input type="number" id="newItemStockQty" step="0.01" min="0"></div>
          <div class="fld"><label>Stock Rate (Excluding GST)</label><input type="number" id="newItemStockRate" step="0.01" min="0"></div>
          <div class="fld"><label>Stock Total Value</label><input type="text" id="newItemStockTotal" readonly></div>
          <div class="fld opt-field" data-field="reorder"><label>Re Order Level</label><input type="number" id="newItemReorderQty" step="0.01" min="0"></div>
          <div class="fld opt-field" data-field="batch"><label>Batch Details</label><input type="text" id="newItemBatch"></div>
          <div class="fld opt-field" data-field="expiry"><label>Expiry Details</label><input type="text" id="newItemExpiry"></div>
          <div class="fld opt-field" data-field="barcode"><label>Bar Code</label><input type="text" id="newItemSku"></div>
          <div class="fld opt-field" data-field="negative"><label class="sp">Negative</label><div class="sw f38"><span>Negative Stock Allowed?</span><label class="tg"><input type="checkbox" id="newItemNegStock"><i></i></label></div></div>
        </div>
      </form>
    </div>
    <div class="modal-foot"><button type="button" class="btn btn-o" data-close>Cancel</button><button type="button" class="btn btn-p" id="saveItemBtn">Save</button></div>
  </div>
</div>

<div class="modal-overlay" id="saleConfigModal">
  <div class="modal-box w6">
    <div class="modal-head"><span class="mh-ic"><i class="fa-solid fa-sliders"></i></span><div class="mh-txt"><h4>Sale Configuration</h4><p class="mh-sub">Choose which fields appear on the sale screen</p></div><button type="button" class="modal-close" data-close><i class="fa-solid fa-xmark"></i></button></div>
    <div class="modal-body">
      <div class="cfg-sec">Header Configuration</div>
      <div class="fgrid c2" style="margin-bottom:10px;"><div class="fld"><label>Method of Voucher Number</label><select id="cfgVoucherMethod"><option value="automatic">Automatic</option><option value="manual">Manual</option></select></div></div>
      <div class="cfg-list">
        <div class="sw"><span>Credit Period Details</span><label class="tg"><input type="checkbox" id="cfgCreditPeriod"><i></i></label></div>
        <div class="sw"><span>Estimate / Quotation</span><label class="tg"><input type="checkbox" id="cfgEstimateQuotation"><i></i></label></div>
        <div class="sw"><span>Sale Order</span><label class="tg"><input type="checkbox" id="cfgSaleOrder"><i></i></label></div>
      </div>
      <div class="cfg-sec">Item Configuration</div>
      <div class="cfg-list">
        <div class="sw"><span>Price List</span><label class="tg"><input type="checkbox" id="cfgPriceList"><i></i></label></div>
        <div class="sw"><span>Item Group</span><label class="tg"><input type="checkbox" id="cfgItemGroup"><i></i></label></div>
        <div class="sw"><span>Discount 1</span><label class="tg"><input type="checkbox" id="cfgDiscount1"><i></i></label></div>
        <div class="sw"><span>Discount 2</span><label class="tg"><input type="checkbox" id="cfgDiscount2"><i></i></label></div>
        <div class="sw"><span>Total Discount</span><label class="tg"><input type="checkbox" id="cfgTotalDiscount"><i></i></label></div>
        <div class="sw"><span>SKU</span><label class="tg"><input type="checkbox" id="cfgSku"><i></i></label></div>
        <div class="sw"><span>Item Description</span><label class="tg"><input type="checkbox" id="cfgItemDesc"><i></i></label></div>
        <div class="sw"><span>MRP</span><label class="tg"><input type="checkbox" id="cfgMrp"><i></i></label></div>
        <div class="sw"><span>Godown</span><label class="tg"><input type="checkbox" id="cfgGodown"><i></i></label></div>
      </div>
      <div class="cfg-sec">Footer Configuration</div>
      <div class="fgrid c2" style="margin-bottom:10px;"><div class="fld"><label>Round Off</label><select id="cfgRoundOffMethod"><option value="normal">Normal Rounding</option><option value="up">Always Round Up</option><option value="down">Always Round Down</option><option value="none">No Rounding</option></select></div></div>
      <div class="cfg-list">
        <div class="sw"><span>Upload Document</span><label class="tg"><input type="checkbox" id="cfgUploadDocument" checked><i></i></label></div>
        <div class="sw"><span>Bank Details</span><label class="tg"><input type="checkbox" id="cfgBankDetails" checked><i></i></label></div>
        <div class="sw"><span>Terms &amp; Conditions</span><label class="tg"><input type="checkbox" id="cfgTerms"><i></i></label></div>
        <div class="sw"><span>Note</span><label class="tg"><input type="checkbox" id="cfgNote"><i></i></label></div>
        <div class="sw"><span>Payment Details</span><label class="tg"><input type="checkbox" id="cfgPayment"><i></i></label></div>
        <div class="sw"><span>CESS</span><label class="tg"><input type="checkbox" id="cfgCess" checked><i></i></label></div>
        <div class="sw"><span>TCS</span><label class="tg"><input type="checkbox" id="cfgTcs"><i></i></label></div>
        <div class="sw"><span>TDS</span><label class="tg"><input type="checkbox" id="cfgTds"><i></i></label></div>
      </div>
    </div>
    <div class="modal-foot"><button type="button" class="btn btn-p" data-close id="applyConfigBtn"><i class="fa-solid fa-check"></i> Done</button></div>
  </div>
</div>

<div class="modal-overlay" id="godownStockModal">
  <div class="modal-box w7">
    <div class="modal-head"><span class="mh-ic t"><i class="fa-solid fa-warehouse"></i></span><div class="mh-txt"><h4>Godown-Wise Stock</h4><p class="mh-sub" id="gslItemName"></p></div><button type="button" class="modal-close" data-close><i class="fa-solid fa-xmark"></i></button></div>
    <div class="modal-body"><div class="hscroll"><table class="gsl"><thead><tr><th>Godown</th><th>Available Qty</th><th>Rate</th><th>MRP</th><th>Quantity To Add</th><th>Action</th></tr></thead><tbody id="gslTableBody"></tbody></table></div></div>
    <div class="modal-foot"><button type="button" class="btn btn-o" data-close>Cancel</button></div>
  </div>
</div>

<div class="modal-overlay" id="priceHistoryModal">
  <div class="modal-box w7">
    <div class="modal-head"><span class="mh-ic t"><i class="fa-solid fa-clock-rotate-left"></i></span><div class="mh-txt"><h4>Price History</h4><p class="mh-sub" id="phItemName"></p></div>
      <div class="mh-acts"><div class="sw ph-head-sw"><span>All Customers</span><label class="tg"><input type="checkbox" id="phAllCustomers" checked><i></i></label></div><button type="button" class="modal-close" data-close><i class="fa-solid fa-xmark"></i></button></div>
    </div>
    <div class="modal-body"><div class="hscroll"><table class="gsl ph"><thead><tr><th>Sr No</th><th>Invoice Number</th><th>Date</th><th>Qty</th><th>MRP</th><th>Unit Price<select id="phTaxMode"><option value="without">Without Tax</option><option value="with">With Tax</option></select></th><th>Discount 1</th><th>Discount 2</th><th>Net Price Per Unit</th><th>Action</th></tr></thead><tbody id="phTableBody"></tbody></table></div></div>
    <div class="modal-foot"><button type="button" class="btn btn-o" data-close>Close</button></div>
  </div>
</div>

<script id="seedData" type="application/json"><?php echo json_encode($seed); ?></script>
<script id="companySeed" type="application/json"><?php echo json_encode(array('name'=>$company_name)); ?></script>
<script>
var SEED = JSON.parse(document.getElementById('seedData').textContent);
var COMPANY = JSON.parse(document.getElementById('companySeed').textContent);
var COUNTRIES = ['India','United Arab Emirates','United States','United Kingdom','Singapore','China','Nepal','Bangladesh','Sri Lanka','Other'];
var PAY_MODES = ['Cash','RTGS','NEFT','Cheque','Credit Card','Debit Card','UPI'];
var STATE_CODE_MAP = {'01':'Jammu and Kashmir','02':'Himachal Pradesh','03':'Punjab','04':'Chandigarh','05':'Uttarakhand','06':'Haryana','07':'Delhi','08':'Rajasthan','09':'Uttar Pradesh','10':'Bihar','11':'Sikkim','12':'Arunachal Pradesh','13':'Nagaland','14':'Manipur','15':'Mizoram','16':'Tripura','17':'Meghalaya','18':'Assam','19':'West Bengal','20':'Jharkhand','21':'Odisha','22':'Chhattisgarh','23':'Madhya Pradesh','24':'Gujarat','27':'Maharashtra','29':'Karnataka','30':'Goa','32':'Kerala','33':'Tamil Nadu','36':'Telangana','37':'Andhra Pradesh'};
var SCOPES = {
  dispatch:{title:'Dispatch Address',sub:'Where the goods are dispatched from',icon:'fa-boxes-packing',cls:'t',multi:false,kind:'dispatch'},
  billing:{title:'Billing Address',sub:'Address printed on the invoice for the party',icon:'fa-building',cls:'',multi:false,kind:'party'},
  shipping:{title:'Shipping Addresses',sub:'Where the goods are delivered (select one or more)',icon:'fa-truck',cls:'g',multi:true,kind:'party'}
};
var QUICK = {
  ledger:{title:'Add Ledger',icon:'fa-book',entity:'ledger',list:'ledgers',f:[
    {k:'name',l:'Ledger Name',r:1,span:2},
    {k:'group',l:'Under Group',r:1,t:'select',p:'Select Group',o:['Sales Accounts','Purchase Accounts','Duties & Taxes','Indirect Expenses','Indirect Income','Bank Accounts','Sundry Debtors','Sundry Creditors'],span:2},
    {k:'opening',l:'Opening Balance',t:'number',v:'0',step:'0.01'},
    {k:'btype',l:'Balance Type',t:'select',o:['Debit','Credit']}
  ],make:function(v){return v.name;}},
  transporter:{title:'Add Transport',icon:'fa-truck',entity:'transporter',list:'transporters',wide:1,fetch:1,f:[
    {k:'name',l:'Transport Name',r:1},
    {k:'gstin',l:'GSTIN/Transporter ID',m:15},
    {k:'addr1',l:'Address Line 1'},
    {k:'addr2',l:'Address Line 2'},
    {k:'country',l:'Country',t:'select',o:['India']},
    {k:'state',l:'State',t:'select',p:'Select state',o:SEED.states},
    {k:'city',l:'City',t:'select',p:'Select City',o:['Agartala','Guwahati','Kolkata','Silchar']},
    {k:'pincode',l:'Pincode',m:6},
    {sec:'Contact Detail'},
    {k:'cname',l:'Name'},
    {k:'contact',l:'Contact Number (+91)',m:10},
    {k:'email',l:'Email',t:'email',span:2},
    {k:'createLedger',l:'Create With Ledger',t:'toggle',span:2}
  ],make:function(v){return v.name;}},
  uom:{title:'Add Unit of Measurement',icon:'fa-ruler',entity:'uom',list:'uoms',f:[
    {k:'short',l:'Short Name',r:1,m:6},
    {k:'full',l:'Full Name',r:1}
  ],make:function(v){return v.short.toUpperCase()+'-'+v.full.toUpperCase();}},
  category:{title:'Add Item Category',icon:'fa-tags',entity:'category',list:'categories',f:[
    {k:'name',l:'Category Name',r:1,span:2}
  ],make:function(v){return v.name;}},
  cess:{title:'Add GST CESS Rate',icon:'fa-percent',f:[
    {k:'rate',l:'CESS Rate (%)',r:1,t:'number',step:'0.01',span:2}
  ]}
};
var STATE = {
  targetSelect:null,targetRow:null,payTarget:null,uploaded:[],extraImages:[],invoiceMode:'item',activeRow:null,matches:[],hi:-1,pMatches:[],pHi:-1,
  addrEdit:null,addrScope:null,godownRow:null,phRow:null,phItem:null,
  books:{
    dispatch:[{id:'dispatch_default',company:COMPANY.name||'',legalName:COMPANY.name||'',gstin:'',line1:'Nil',line2:'',place:'Manubazar Road',city:'',pincode:'799143',state:'Tripura',country:'India',selected:true}],
    billing:[],shipping:[]
  }
};

(function seedItemStock(){
  var demo=[
    {gd1:{qty:420,rate:182,mrp:210},gd2:{qty:-15,rate:184,mrp:210}},
    {gd1:{qty:65,rate:140,mrp:165},gd2:{qty:30,rate:141,mrp:165}},
    {gd1:{qty:-8,rate:94,mrp:110},gd2:{qty:12,rate:95,mrp:110}}
  ];
  SEED.items.forEach(function(it,i){
    var d=demo[i%demo.length],t=0;
    it.stockByGodown={};
    SEED.godowns.forEach(function(g){
      var s=d[g.id]||{qty:0,rate:it.price,mrp:it.mrp};
      it.stockByGodown[g.id]={qty:s.qty,rate:s.rate,mrp:s.mrp};
      t+=s.qty;
    });
    it.totalStock=t;
  });
})();

(function seedPriceHistory(){
  var prefix=SEED.invoiceSeries[0].prefix,base=12,qtys=[166,2000,2000],dates=['2026-08-12','2026-08-05','2026-07-28'];
  SEED.items.forEach(function(it,idx){
    if(it.priceHistory){return;}
    it.priceHistory=[];
    for(var i=0;i<3;i++){
      it.priceHistory.push({
        invoiceNumber:prefix+(base-i),
        date:dates[i],
        qty:qtys[i],
        mrp:it.mrp||0,
        price:it.price,
        disc1:0,
        disc2:0,
        partyId:SEED.parties[(idx+i)%SEED.parties.length].id
      });
    }
  });
})();

function $(id){return document.getElementById(id);}
function qs(s,r){return (r||document).querySelector(s);}
function qsa(s,r){return Array.prototype.slice.call((r||document).querySelectorAll(s));}
function esc(s){return String(s||'').replace(/[&<>"']/g,function(c){return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c];});}
function money(n){n=isNaN(n)?0:n;return '\u20b9 '+n.toLocaleString('en-IN',{minimumFractionDigits:2,maximumFractionDigits:2});}
function fmtDate(s){if(!s){return '';}var p=s.split('-');return p.length===3?p[2]+'-'+p[1]+'-'+p[0]:s;}
function todayStr(){
  var d=new Date(),m=d.getMonth()+1,day=d.getDate();
  return d.getFullYear()+'-'+(m<10?'0'+m:m)+'-'+(day<10?'0'+day:day);
}
function toast(m,icon){
  var st=$('toastStack'),el=document.createElement('div');
  el.className='toast';el.innerHTML='<i class="fa-solid '+(icon||'fa-circle-check')+'"></i><span>'+m+'</span>';
  st.appendChild(el);
  setTimeout(function(){el.style.opacity='0';el.style.transition='.3s';},2600);
  setTimeout(function(){if(el.parentNode){st.removeChild(el);}},3000);
}
function openModal(id){var e=$(id);if(e){e.classList.add('show');}}
function closeModal(id){var e=$(id);if(e){e.classList.remove('show');}}

function opts(sel,list,first,selected){
  sel.innerHTML=(first===null||first===undefined)?'':'<option value="">'+first+'</option>';
  list.forEach(function(x){
    var o=document.createElement('option');
    o.value=x.id!==undefined?x.id:x;o.textContent=x.name!==undefined?x.name:x;
    if(String(o.value)===String(selected)){o.selected=true;}
    sel.appendChild(o);
  });
}
function rateOpts(sel,list,selected){
  sel.innerHTML='';
  list.forEach(function(r){var o=document.createElement('option');o.value=r;o.textContent=r+'%';if(String(r)===String(selected)){o.selected=true;}sel.appendChild(o);});
}
function stateOpts(sel,selected){opts(sel,SEED.states,'Select state',selected);}
function countryOpts(sel,selected){opts(sel,COUNTRIES,null,selected||'India');}

function fillMasters(){
  qsa('[data-entity="uom"]').forEach(function(s){opts(s,SEED.uoms,'Select UOM');});
  qsa('[data-entity="uom2"]').forEach(function(s){opts(s,SEED.uoms,'None');});
  qsa('[data-entity="category"]').forEach(function(s){opts(s,SEED.categories,null);});
  qsa('[data-entity="ledger"]').forEach(function(s){opts(s,SEED.ledgers,'Select Ledger');});
  qsa('[data-entity="bank"]').forEach(function(s){opts(s,SEED.banks,'Select Bank');});
  qsa('[data-entity="transporter"]').forEach(function(s){opts(s,SEED.transporters,'Select Transporter');});
  qsa('[data-entity="cessRate"]').forEach(function(s){rateOpts(s,SEED.cessRates,0);});
  qsa('[data-entity="state"]').forEach(function(s){stateOpts(s,'');});
  qsa('[data-entity="country"]').forEach(function(s){countryOpts(s,'India');});
  opts($('newItemCategory'),SEED.categories,'Select Item Category');
  opts($('newItemPrimaryUom'),SEED.uoms,'Select Unit of Measurement');
  opts($('newItemSecondaryUom'),SEED.uoms,'Select Secondary Unit');
  var gr=$('newItemGstRate');
  gr.innerHTML='<option value="">Select GST Rate</option>';
  SEED.gstRates.forEach(function(r){var o=document.createElement('option');o.value=r;o.textContent=r+'%';gr.appendChild(o);});
  var cs=$('newItemCessRate');
  cs.innerHTML='<option value="">None</option>';
  SEED.cessRates.forEach(function(r){if(r>0){var o=document.createElement('option');o.value=r;o.textContent=r+'%';cs.appendChild(o);}});
}

function appendEverywhere(entity,id,name){
  qsa('[data-entity="'+entity+'"]').forEach(function(sel){
    var o=document.createElement('option');o.value=id;o.textContent=name;sel.appendChild(o);
  });
  if(entity==='uom'){qsa('[data-entity="uom2"]').forEach(function(sel){var o=document.createElement('option');o.value=id;o.textContent=name;sel.appendChild(o);});}
  if(STATE.targetSelect){STATE.targetSelect.value=id;STATE.targetSelect.dispatchEvent(new Event('change'));}
}

function initDatePickers(){
  document.addEventListener('click',function(e){
    var t=e.target;
    if(t&&t.tagName==='INPUT'&&t.type==='date'&&!t.readOnly&&!t.disabled){
      try{if(typeof t.showPicker==='function'){t.showPicker();}}catch(err){}
    }
  });
  document.addEventListener('keydown',function(e){
    var t=e.target;
    if(t&&t.tagName==='INPUT'&&t.type==='date'){
      if(e.key==='Tab'||e.key==='Escape'||e.key==='Shift'){return;}
      e.preventDefault();
      if(e.key==='Enter'||e.key===' '||e.key==='ArrowDown'){
        try{if(typeof t.showPicker==='function'){t.showPicker();}}catch(err){}
      }
    }
  });
}

function seriesById(id){
  return SEED.invoiceSeries.filter(function(s){return s.id===id;})[0];
}
function initSeries(){
  var sel=$('invoiceSeries');
  opts(sel,SEED.invoiceSeries.map(function(x){return {id:x.id,name:x.prefix};}),null,SEED.invoiceSeries[0].id);
  $('invoiceNumber').value=SEED.invoiceSeries[0].next;
  sel.addEventListener('change',function(){
    var cur=seriesById(sel.value);
    if(cur){$('invoiceNumber').value=cur.next;toast('Invoice series changed to '+cur.prefix,'fa-hashtag');}
  });
}

function qField(x){
  if(x.sec){return '<div class="cfg-sec" style="grid-column:1/-1;">'+x.sec+'</div>';}
  var sp=x.span===2?' style="grid-column:1/-1;"':'';
  if(x.t==='toggle'){return '<div class="sw"'+sp+'><span>'+x.l+'</span><label class="tg"><input type="checkbox" data-k="'+x.k+'"><i></i></label></div>';}
  var inner;
  if(x.t==='select'){
    inner='<select data-k="'+x.k+'">'+(x.p?'<option value="">'+x.p+'</option>':'')+x.o.map(function(o){return '<option>'+esc(o)+'</option>';}).join('')+'</select>';
  } else {
    inner='<input type="'+(x.t||'text')+'" data-k="'+x.k+'" data-d="'+(x.v!==undefined?x.v:'')+'"'+(x.v!==undefined?' value="'+x.v+'"':'')+(x.m?' maxlength="'+x.m+'"':'')+(x.step?' step="'+x.step+'"':'')+'>';
  }
  return '<div class="fld"'+sp+'><label>'+x.l+(x.r?' <span class="req">*</span>':'')+'</label>'+inner+'</div>';
}

function buildQuickModals(){
  var h='';
  Object.keys(QUICK).forEach(function(k){
    var q=QUICK[k];
    h+='<div class="modal-overlay top" id="quick_'+k+'" data-quickkey="'+k+'"><div class="modal-box'+(q.wide?' w6':'')+'"><div class="modal-head"><span class="mh-ic g"><i class="fa-solid '+q.icon+'"></i></span><div class="mh-txt"><h4>'+q.title+'</h4></div><div class="mh-acts">'+(q.fetch?'<button type="button" class="mh-fetch quick-fetch"><i class="fa-solid fa-magnifying-glass"></i> Fetch GSTIN Details</button>':'')+'<button type="button" class="modal-close" data-close><i class="fa-solid fa-xmark"></i></button></div></div><div class="modal-body"><div class="fgrid c2">'+q.f.map(qField).join('')+'</div></div><div class="modal-foot"><button type="button" class="btn btn-o" data-close>Cancel</button><button type="button" class="btn btn-p quick-save"><i class="fa-solid fa-check"></i> Save</button></div></div></div>';
  });
  return h;
}

function addrFormHtml(kind){
  if(kind==='dispatch'){
    return '<div class="fgrid c2">'+
      '<div class="fld"><label>Address Line 1 <span class="req">*</span></label><input type="text" data-f="line1"></div>'+
      '<div class="fld"><label>Address Line 2</label><input type="text" data-f="line2"></div>'+
      '<div class="fld"><label>GSTIN Number</label><div class="with-btn"><input type="text" data-f="gstin" maxlength="15"><button type="button" class="btn btn-p btn-ic am-fetch" title="Fetch GSTIN details"><i class="fa-solid fa-magnifying-glass"></i></button></div></div>'+
      '<div class="fld"><label>Company Name</label><input type="text" data-f="company"></div>'+
      '<div class="fld"><label>City <span class="req">*</span></label><input type="text" data-f="city"></div>'+
      '<div class="fld"><label>Pincode <span class="req">*</span></label><input type="text" data-f="pincode" maxlength="6"></div>'+
      '<div class="fld"><label>State <span class="req">*</span></label><select data-f="state"></select></div>'+
      '<div class="fld"><label>Country <span class="req">*</span></label><select data-f="country"></select></div>'+
    '</div>';
  }
  return '<div class="fgrid c2">'+
    '<div class="fld"><label>Registration Type</label><select data-f="reg"><option value="">Select Registration Type</option><option value="regular">Registered Business - Regular</option><option value="unregistered">Unregistered Business</option><option value="composition">Registered Business - Composition</option><option value="tds">Tax Deductor / Tax Collector</option><option value="consumer">Consumer</option></select></div>'+
    '<div class="fld gpw" hidden><label class="gpl">GST Number</label><div class="with-btn"><input type="text" data-f="gp" maxlength="15"><button type="button" class="btn btn-p btn-ic am-fetch gpf" title="Fetch GSTIN details"><i class="fa-solid fa-magnifying-glass"></i></button></div></div>'+
    '<div class="fld"><label>Legal Name</label><input type="text" data-f="legal"></div>'+
    '<div class="fld trw" hidden><label>Trade Name</label><input type="text" data-f="trade"></div>'+
    '<div class="fld"><label>Pincode <span class="req">*</span></label><input type="text" data-f="pincode" maxlength="6"></div>'+
    '<div class="fld"><label>Address Line 1</label><input type="text" data-f="line1"></div>'+
    '<div class="fld"><label>Address Line 2</label><input type="text" data-f="line2"></div>'+
    '<div class="fld"><label>Place <span class="req">*</span></label><input type="text" data-f="place"></div>'+
    '<div class="fld"><label>City</label><input type="text" data-f="city"></div>'+
    '<div class="fld"><label>State <span class="req">*</span></label><select data-f="state"></select></div>'+
    '<div class="fld"><label>Country <span class="req">*</span></label><select data-f="country"></select></div>'+
  '</div>';
}

function buildAddressModals(){
  var h='';
  Object.keys(SCOPES).forEach(function(s){
    var c=SCOPES[s];
    h+='<div class="modal-overlay" id="addrModal_'+s+'"><div class="modal-box w6">'+
      '<div class="modal-head"><span class="mh-ic '+c.cls+'"><i class="fa-solid '+c.icon+'"></i></span><div class="mh-txt"><h4 class="am-title">'+c.title+'</h4><p class="mh-sub">'+c.sub+'</p></div><button type="button" class="modal-close" data-close><i class="fa-solid fa-xmark"></i></button></div>'+
      '<div class="modal-body"><div class="am-list"></div><div class="am-form" hidden>'+addrFormHtml(c.kind)+'</div></div>'+
      '<div class="modal-foot"><div class="mf-list" style="display:contents;"><button type="button" class="btn btn-gl push am-new"><i class="fa-solid fa-plus"></i> Add New Address</button><button type="button" class="btn btn-o" data-close>Cancel</button><button type="button" class="btn btn-p" data-close><i class="fa-solid fa-check"></i> Done</button></div>'+
      '<div class="mf-form" style="display:none;gap:10px;width:100%;"><button type="button" class="btn btn-o push am-back"><i class="fa-solid fa-arrow-left"></i> Back to list</button><button type="button" class="btn btn-p am-save"><i class="fa-solid fa-check"></i> Save Address</button></div></div>'+
    '</div></div>';
  });
  return h;
}

function addrLines(a){
  var L=[],nm=a.legalName||a.company||'',tr=a.tradeName||'';
  if(nm){L.push([1,nm]);}
  if(tr||a.gstin){L.push([1,(tr||nm)+(a.gstin?' ('+a.gstin+')':'')]);}
  var l3=[a.line1,a.line2,a.place].filter(Boolean).join(', ');
  if(l3){L.push([0,l3]);}
  var l4=[a.city,a.state,a.pincode,(a.country&&a.country!=='India'?a.country:'')].filter(Boolean).join(', ');
  if(l4){L.push([0,l4]);}
  return L;
}
function linesHtml(a){
  return addrLines(a).map(function(l){return '<div class="ac-line'+(l[0]?' b':'')+'">'+esc(l[1])+'</div>';}).join('');
}

function renderCard(scope){
  var box=$(scope+'Card'),sel=STATE.books[scope].filter(function(a){return a.selected;});
  box.innerHTML='';
  if(!sel.length){
    box.innerHTML='<div class="ac-empty"><i class="fa-solid fa-location-dot"></i>No address selected<br><button type="button" class="btn btn-gl btn-sm" data-addr="'+scope+'" data-mode="add" style="margin-top:8px;"><i class="fa-solid fa-plus"></i> Add Address</button></div>';
  } else {
    sel.forEach(function(a){
      var b=document.createElement('div');b.className='ac-blk';b.innerHTML=linesHtml(a);box.appendChild(b);
    });
  }
  if(scope==='shipping'){
    var all=STATE.books.shipping.length;
    $('shippingSummary').textContent=all?sel.length+' of '+all+' address(es) selected':'No shipping address set.';
  }
}

function renderList(scope){
  var m=$('addrModal_'+scope),list=qs('.am-list',m),c=SCOPES[scope],entries=STATE.books[scope];
  list.innerHTML='';
  if(!entries.length){list.innerHTML='<div class="am-empty"><i class="fa-solid fa-map-location-dot"></i>No '+scope+' address added yet.<br>Click <b>Add New Address</b> to create one.</div>';return;}
  entries.forEach(function(a){
    var d=document.createElement('div');
    d.className='am-item'+(a.selected?' sel':'');
    d.innerHTML='<input type="'+(c.multi?'checkbox':'radio')+'" name="am_'+scope+'"'+(a.selected?' checked':'')+'><div class="am-body">'+linesHtml(a)+'</div><div class="am-act"><button type="button" class="e" title="Edit"><i class="fa-solid fa-pen"></i></button><button type="button" class="x" title="Remove"><i class="fa-solid fa-trash"></i></button></div>';
    d.addEventListener('click',function(e){
      if(e.target.closest('.am-act')){return;}
      var cb=qs('input',d);
      if(e.target!==cb){cb.checked=c.multi?!cb.checked:true;}
      pickAddr(scope,a.id,cb.checked);
      renderList(scope);
    });
    qs('.e',d).addEventListener('click',function(e){e.stopPropagation();openAddr(scope,a.id);});
    qs('.x',d).addEventListener('click',function(e){
      e.stopPropagation();
      if(!window.confirm('Remove this address?')){return;}
      STATE.books[scope]=STATE.books[scope].filter(function(x){return x.id!==a.id;});
      if(!c.multi&&STATE.books[scope].length&&!STATE.books[scope].some(function(x){return x.selected;})){STATE.books[scope][0].selected=true;}
      renderList(scope);renderCard(scope);
      if(scope==='billing'){syncShip();}
      recalcAll();
    });
    list.appendChild(d);
  });
}

function pickAddr(scope,id,val){
  var c=SCOPES[scope];
  STATE.books[scope].forEach(function(a){if(c.multi){if(a.id===id){a.selected=val;}}else{a.selected=(a.id===id);}});
  renderCard(scope);
  if(scope==='billing'){syncShip();}
  recalcAll();
}

function setAddrView(scope,form){
  var m=$('addrModal_'+scope);
  qs('.am-list',m).hidden=form;qs('.am-form',m).hidden=!form;
  qs('.mf-list',m).style.display=form?'none':'contents';
  qs('.mf-form',m).style.display=form?'flex':'none';
  qs('.am-title',m).textContent=form?((STATE.addrEdit?'Edit ':'Add ')+SCOPES[scope].title.replace(/es$/,'')):SCOPES[scope].title;
}

function updReg(m){
  var v=qs('[data-f="reg"]',m).value,gw=qs('.gpw',m),tw=qs('.trw',m),lb=qs('.gpl',m),fb=qs('.gpf',m);
  if(v==='regular'||v==='composition'||v==='tds'){gw.hidden=false;tw.hidden=false;lb.textContent='GST Number';fb.style.display='';}
  else if(v==='unregistered'){gw.hidden=false;tw.hidden=true;lb.textContent='PAN Number';fb.style.display='none';}
  else{gw.hidden=true;tw.hidden=true;}
}

function openAddr(scope,editId,formOnly){
  var m=$('addrModal_'+scope),c=SCOPES[scope];
  var a=editId?STATE.books[scope].filter(function(x){return x.id===editId;})[0]:null;
  STATE.addrScope=scope;STATE.addrEdit=editId||null;
  var f=function(k){return qs('[data-f="'+k+'"]',m);};
  function put(k,v){f(k).value=v||'';}
  if(c.kind==='dispatch'){
    put('line1',a&&a.line1);put('line2',a&&a.line2);put('gstin',a&&a.gstin);put('company',a&&a.company);put('city',a&&a.city);put('pincode',a&&a.pincode);
  } else {
    put('reg',a&&a.registrationType);put('gp',a&&(a.registrationType==='unregistered'?a.pan:a.gstin));put('legal',a&&a.legalName);put('trade',a&&a.tradeName);
    put('pincode',a&&a.pincode);put('line1',a&&a.line1);put('line2',a&&a.line2);put('place',a&&a.place);put('city',a&&a.city);
    updReg(m);
  }
  stateOpts(f('state'),a?a.state:'');
  countryOpts(f('country'),a?a.country:'India');
  if(a||formOnly||!STATE.books[scope].length){setAddrView(scope,true);}
  else{renderList(scope);setAddrView(scope,false);}
  openModal('addrModal_'+scope);
}

function saveAddr(scope){
  var m=$('addrModal_'+scope),c=SCOPES[scope],f=function(k){return qs('[data-f="'+k+'"]',m);};
  function v(k){return f(k).value.trim();}
  var req=c.kind==='dispatch'?[['line1','Address Line 1'],['city','City'],['pincode','Pincode'],['state','State'],['country','Country']]:[['pincode','Pincode'],['place','Place'],['state','State'],['country','Country']];
  for(var i=0;i<req.length;i++){if(!v(req[i][0])){toast(req[i][1]+' is required','fa-triangle-exclamation');f(req[i][0]).focus();return;}}
  var data;
  if(c.kind==='dispatch'){
    data={company:v('company'),legalName:v('company'),gstin:v('gstin'),line1:v('line1'),line2:v('line2'),place:'',city:v('city'),pincode:v('pincode'),state:v('state'),country:v('country')};
  } else {
    var reg=v('reg'),gp=v('gp'),isG=(reg==='regular'||reg==='composition'||reg==='tds');
    data={registrationType:reg,gstin:isG?gp:'',pan:reg==='unregistered'?gp:'',legalName:v('legal'),tradeName:v('trade'),company:v('trade')||v('legal'),line1:v('line1'),line2:v('line2'),place:v('place'),city:v('city'),pincode:v('pincode'),state:v('state'),country:v('country')};
  }
  if(STATE.addrEdit){
    var ex=STATE.books[scope].filter(function(x){return x.id===STATE.addrEdit;})[0];
    if(ex){Object.assign(ex,data);}
  } else {
    data.id=scope+'_'+Date.now();data.selected=true;
    if(!c.multi){STATE.books[scope].forEach(function(a){a.selected=false;});}
    STATE.books[scope].push(data);
  }
  STATE.addrEdit=null;
  renderCard(scope);
  if(scope==='billing'){syncShip();}
  recalcAll();
  toast('Address saved');
  if(c.multi){renderList(scope);setAddrView(scope,false);}
  else{closeModal('addrModal_'+scope);}
}

function syncShip(){
  var cb=$('shipSameAsBilling');
  if(!cb.checked){return;}
  var b=STATE.books.billing.filter(function(a){return a.selected;})[0];
  if(!b){return;}
  var ex=STATE.books.shipping.filter(function(a){return a.fromBilling;})[0];
  var data=Object.assign({},b,{id:ex?ex.id:'shipping_from_billing',fromBilling:true,selected:true});
  if(ex){Object.assign(ex,data);}else{STATE.books.shipping.unshift(data);}
  renderCard('shipping');
}

function mockGstin(g){
  var st=STATE_CODE_MAP[g.substring(0,2)]||'West Bengal';
  return {name:'Verified Business ('+g+')',line1:'Registered Office, '+st,city:st+' City',state:st,pincode:'000000'};
}

function initAddress(){
  $('dynModals').innerHTML=buildAddressModals()+buildQuickModals();
  Object.keys(SCOPES).forEach(function(s){
    var m=$('addrModal_'+s),c=SCOPES[s];
    qs('.am-new',m).addEventListener('click',function(){openAddr(s,null,true);});
    qs('.am-back',m).addEventListener('click',function(){STATE.addrEdit=null;renderList(s);setAddrView(s,false);});
    qs('.am-save',m).addEventListener('click',function(){saveAddr(s);});
    if(c.kind==='party'){qs('[data-f="reg"]',m).addEventListener('change',function(){updReg(m);});}
    qs('.am-fetch',m).addEventListener('click',function(){
      var gi=qs(c.kind==='dispatch'?'[data-f="gstin"]':'[data-f="gp"]',m),g=gi.value.trim();
      if(g.length<15){toast('Enter a valid 15 character GSTIN','fa-triangle-exclamation');return;}
      var d=mockGstin(g);
      toast('Fetching GSTIN details...','fa-magnifying-glass');
      setTimeout(function(){
        qs('[data-f="'+(c.kind==='dispatch'?'company':'legal')+'"]',m).value=d.name;
        qs('[data-f="line1"]',m).value=d.line1;
        qs('[data-f="city"]',m).value=d.city;
        if(c.kind==='party'){qs('[data-f="place"]',m).value=d.city;}
        qs('[data-f="pincode"]',m).value=d.pincode;
        stateOpts(qs('[data-f="state"]',m),d.state);
        toast('GSTIN details fetched successfully');
      },400);
    });
    renderCard(s);
  });
  document.addEventListener('click',function(e){
    var b=e.target.closest('[data-addr]');
    if(!b){return;}
    e.preventDefault();
    openAddr(b.getAttribute('data-addr'),null,b.getAttribute('data-mode')==='add');
  });
  $('shipSameAsBilling').addEventListener('change',function(){
    if(this.checked){
      if(!STATE.books.billing.some(function(a){return a.selected;})){this.checked=false;toast('Select or add a billing address first','fa-triangle-exclamation');return;}
      syncShip();toast('Billing address added to shipping addresses');
    } else {
      STATE.books.shipping=STATE.books.shipping.filter(function(a){return !a.fromBilling;});
      renderCard('shipping');
      toast('Billing-based shipping entry removed','fa-circle-info');
    }
  });
}

function initQuick(){
  document.addEventListener('click',function(e){
    var b=e.target.closest('[data-quick]');
    if(!b){return;}
    var k=b.getAttribute('data-quick'),box=b.closest('.fld'),sel=box?qs('select',box):(b.previousElementSibling&&b.previousElementSibling.tagName==='SELECT'?b.previousElementSibling:null);
    STATE.targetSelect=sel;
    qsa('#quick_'+k+' [data-k]').forEach(function(i){
      if(i.type==='checkbox'){i.checked=false;}
      else if(i.tagName==='SELECT'){i.selectedIndex=0;}
      else{i.value=i.getAttribute('data-d')||'';}
    });
    openModal('quick_'+k);
  });
  qsa('.quick-save').forEach(function(btn){
    btn.addEventListener('click',function(){
      var m=btn.closest('.modal-overlay'),k=m.getAttribute('data-quickkey'),q=QUICK[k],v={},ok=true;
      qsa('[data-k]',m).forEach(function(i){v[i.getAttribute('data-k')]=i.type==='checkbox'?i.checked:i.value.trim();});
      q.f.forEach(function(x){if(x.r&&!v[x.k]){ok=false;}});
      if(!ok){toast('Please fill all required fields','fa-triangle-exclamation');return;}
      if(k==='cess'){
        var val=parseFloat(v.rate);
        if(isNaN(val)||val<0){toast('A valid CESS rate is required','fa-triangle-exclamation');return;}
        if(SEED.cessRates.indexOf(val)===-1){SEED.cessRates.push(val);}
        qsa('[data-entity="cessRate"]').forEach(function(s){rateOpts(s,SEED.cessRates,val);});
        closeModal(m.id);toast('CESS rate '+val+'% added','fa-percent');return;
      }
      var id=k+'_'+Date.now(),name=q.make(v);
      SEED[q.list].push({id:id,name:name});
      appendEverywhere(q.entity,id,name);
      if(k==='transporter'&&v.createLedger){SEED.ledgers.push({id:'l_'+Date.now(),name:name});qsa('[data-entity="ledger"]').forEach(function(s){var o=document.createElement('option');o.value='l_'+Date.now();o.textContent=name;s.appendChild(o);});}
      if(k==='category'){qsa('.row-itemgroup').forEach(function(s){var o=document.createElement('option');o.value=id;o.textContent=name;s.appendChild(o);});}
      closeModal(m.id);toast('"'+name+'" added');
    });
  });
  var tf=qs('#quick_transporter .quick-fetch');
  if(tf){
    tf.addEventListener('click',function(){
      var m=$('quick_transporter'),g=qs('[data-k="gstin"]',m).value.trim();
      if(g.length<15){toast('Enter a valid 15 character GSTIN','fa-triangle-exclamation');return;}
      var d=mockGstin(g);
      qs('[data-k="addr1"]',m).value=d.line1;qs('[data-k="pincode"]',m).value=d.pincode;qs('[data-k="state"]',m).value=d.state;
      toast('GSTIN details fetched successfully');
    });
  }
}

function initBank(){
  $('addBankBtn').addEventListener('click',function(){
    STATE.targetSelect=$('bankSelect');
    $('addBankForm').reset();
    $('bankObDate').value=todayStr();
    openModal('addBankModal');
  });
  $('bankIfsc').addEventListener('input',function(){this.value=this.value.toUpperCase();});
  $('saveBankBtn').addEventListener('click',function(){
    function v(id){return $(id).value.trim();}
    var checks=[['bankAccountType','Account type'],['bankName','Bank name'],['bankAccountNumber','Account number'],['bankObDate','Opening balance date'],['bankObAmount','Opening balance amount'],['bankObType','Opening balance type']];
    for(var i=0;i<checks.length;i++){
      if(!v(checks[i][0])){toast(checks[i][1]+' is required','fa-triangle-exclamation');$(checks[i][0]).focus();return;}
    }
    var acc=v('bankAccountNumber'),name=v('bankName')+' - '+acc.slice(-4),id='bank_'+Date.now();
    SEED.banks.push({id:id,name:name,accountType:v('bankAccountType'),holder:v('bankHolderName'),ifsc:v('bankIfsc'),branch:v('bankBranch'),account:acc,obDate:v('bankObDate'),obAmount:parseFloat(v('bankObAmount'))||0,obType:v('bankObType')});
    appendEverywhere('bank',id,name);
    closeModal('addBankModal');
    toast('Bank account "'+name+'" added','fa-building-columns');
  });
}

function closeItemSr(){$('itemSr').classList.remove('show');STATE.activeRow=null;STATE.matches=[];STATE.hi=-1;}
function closePartySr(){$('partySr').classList.remove('show');STATE.pMatches=[];STATE.pHi=-1;}
function posSr(panel,input){var r=input.getBoundingClientRect();panel.style.left=r.left+'px';panel.style.top=(r.bottom+4)+'px';panel.style.width=Math.max(r.width,260)+'px';}
function renderItemSr(){
  var p=$('itemSr');p.innerHTML='';
  if(!STATE.matches.length){p.innerHTML='<div class="empty">No '+(STATE.invoiceMode==='accounting'?'ledgers':'items')+' found</div>';}
  STATE.matches.forEach(function(en,i){
    var d=document.createElement('div');d.className='it'+(i===STATE.hi?' act':'');
    if(STATE.invoiceMode==='accounting'){d.innerHTML='<b>'+esc(en.name)+'</b><small>Ledger</small>';}
    else{var s=typeof en.totalStock==='number'?en.totalStock:0;d.innerHTML='<b>'+esc(en.name)+'</b><small>\u20b9 '+Number(en.price).toFixed(2)+' \u00b7 '+en.gst+'% GST \u00b7 <span class="'+(s<0?'neg':'pos')+'">Stock: '+s+'</span></small>';}
    d.addEventListener('mousedown',function(e){e.preventDefault();pickItem(en);});
    p.appendChild(d);
  });
  p.classList.add('show');
}
function runItemSr(row,q){
  STATE.activeRow=row;q=(q||'').trim().toLowerCase();
  var src=STATE.invoiceMode==='accounting'?SEED.ledgers:SEED.items;
  STATE.matches=src.filter(function(e){return !q||e.name.toLowerCase().indexOf(q)!==-1;}).slice(0,8);
  STATE.hi=STATE.matches.length?0:-1;
  posSr($('itemSr'),qs('.js-item-search',row));renderItemSr();
}
function pickItem(en){
  var row=STATE.activeRow;if(!row){return;}
  if(STATE.invoiceMode==='accounting'){qs('.js-item-search',row).value=en.name;row.dataset.itemId=en.id;row.dataset.itemName=en.name;closeItemSr();return;}
  applyItem(row,en);qs('.js-item-search',row).value=en.name;closeItemSr();
  if($('cfgGodown').checked){openGodown(row,en);}
}
function applyItem(tr,it){
  qs('.row-price',tr).value=it.price;
  qs('.js-uom',tr).value=it.uom||'';
  qs('.row-gst',tr).value=it.gst||0;
  qs('.row-hsn',tr).value=it.hsn||'';
  qs('.row-sku',tr).value=it.sku||'';
  qs('.row-mrp',tr).value=it.mrp||0;
  tr.dataset.itemId=it.id;tr.dataset.itemName=it.name;tr.dataset.cessRate=it.cess||0;
  recalcAll();
}

function openGodown(tr,it){
  STATE.godownRow=tr;
  $('gslItemName').textContent=it.name;
  var tb=$('gslTableBody');tb.innerHTML='';
  SEED.godowns.forEach(function(g){
    var st=(it.stockByGodown&&it.stockByGodown[g.id])||{qty:0,rate:it.price,mrp:it.mrp};
    var r=document.createElement('tr');
    r.innerHTML='<td>'+esc(g.name)+'</td><td class="'+(st.qty<0?'neg':'pos')+'">'+st.qty+'</td><td>'+Number(st.rate).toFixed(2)+'</td><td>'+Number(st.mrp).toFixed(2)+'</td><td><input type="number" value="0" min="0" step="0.01"></td><td><button type="button" class="btn btn-p btn-sm">Select</button></td>';
    qs('button',r).addEventListener('click',function(){
      var q=parseFloat(qs('input',r).value)||0;
      if(q<=0){toast('Enter a quantity greater than zero','fa-triangle-exclamation');return;}
      var t=STATE.godownRow;
      qs('.row-godown',t).value=g.id;qs('.row-qty',t).value=q;qs('.row-price',t).value=st.rate;qs('.row-mrp',t).value=st.mrp;
      closeModal('godownStockModal');recalcAll();toast('Quantity added from '+g.name);
    });
    tb.appendChild(r);
  });
  openModal('godownStockModal');
}

function phNet(e,mode,gst){
  var p=mode==='with'?e.price*(1+(gst||0)/100):e.price;
  return Math.max(p-(e.disc1||0)-(e.disc2||0),0);
}
function renderPriceHistory(){
  var it=STATE.phItem;if(!it){return;}
  var all=$('phAllCustomers').checked,mode=$('phTaxMode').value,pid=$('partySelect').value;
  var list=(it.priceHistory||[]).filter(function(e){return all||!pid||e.partyId===pid;});
  var tb=$('phTableBody');tb.innerHTML='';
  if(!list.length){tb.innerHTML='<tr><td colspan="10">No price history found</td></tr>';return;}
  list.forEach(function(e,i){
    var unit=mode==='with'?e.price*(1+(it.gst||0)/100):e.price,net=phNet(e,mode,it.gst);
    var r=document.createElement('tr');
    r.innerHTML='<td>'+(i+1)+'</td><td>'+esc(e.invoiceNumber)+'</td><td>'+fmtDate(e.date)+'</td><td>'+e.qty+'</td><td>\u20b9 '+Number(e.mrp||0).toFixed(2)+'</td><td>\u20b9 '+Number(unit).toFixed(2)+'</td><td>\u20b9 '+Number(e.disc1||0).toFixed(2)+'</td><td>\u20b9 '+Number(e.disc2||0).toFixed(2)+'</td><td>\u20b9 '+Number(net).toFixed(2)+'</td><td><button type="button" class="btn btn-p btn-sm">Pick</button></td>';
    qs('button',r).addEventListener('click',function(){
      var t=STATE.phRow;
      if(t){
        var main=$('unitPriceMode').value;
        qs('.row-price',t).value=(main==='with'?e.price*(1+(it.gst||0)/100):e.price).toFixed(2);
        qs('.row-mrp',t).value=e.mrp||0;
        qs('.row-d1t',t).value='flat';qs('.row-d1v',t).value=e.disc1||0;
        qs('.row-d2t',t).value='flat';qs('.row-d2v',t).value=e.disc2||0;
      }
      closeModal('priceHistoryModal');recalcAll();toast('Price picked from history');
    });
    tb.appendChild(r);
  });
}
function openPriceHistory(tr,it){
  STATE.phRow=tr;STATE.phItem=it;
  $('phItemName').textContent=it.name;
  renderPriceHistory();
  openModal('priceHistoryModal');
}
function initPriceHistory(){
  $('phAllCustomers').addEventListener('change',renderPriceHistory);
  $('phTaxMode').addEventListener('change',renderPriceHistory);
}

function stateOf(addr){
  if(!addr){return '';}
  var parts=addr.split(',').map(function(p){return p.trim().toLowerCase();});
  for(var j=0;j<SEED.states.length;j++){if(parts.indexOf(SEED.states[j].toLowerCase())!==-1){return SEED.states[j];}}
  return '';
}

function setPartyBalance(p){
  var el=$('partyBalance');
  if(!p){el.value='';el.className='';return;}
  var amt=Number(p.balance)||0,t=p.balanceType||'Dr';
  el.value=money(amt)+(amt>0?' '+t:'');
  el.className=amt>0?(t==='Dr'?'bal-dr':'bal-cr'):'';
}

function renderPartySr(){
  var p=$('partySr');p.innerHTML='';
  if(!STATE.pMatches.length){p.innerHTML='<div class="empty">No parties found</div>';}
  STATE.pMatches.forEach(function(x,i){
    var st=x.state||stateOf(x.address),d=document.createElement('div');
    d.className='it'+(i===STATE.pHi?' act':'');
    d.innerHTML='<div><b>'+esc(x.name)+'</b>'+(x.gstin?'<span class="sub">['+esc(x.gstin)+']</span>':'')+'</div><small>'+esc(x.mobile||'-')+(st?' \u00b7 '+esc(st):'')+'</small>';
    d.addEventListener('mousedown',function(e){e.preventDefault();selectParty(x);});
    p.appendChild(d);
  });
  p.classList.add('show');
}
function runPartySr(q){
  q=(q||'').trim().toLowerCase();
  STATE.pMatches=SEED.parties.filter(function(p){return !q||p.name.toLowerCase().indexOf(q)!==-1;}).slice(0,8);
  STATE.pHi=STATE.pMatches.length?0:-1;
  posSr($('partySr'),$('partySearchInput'));renderPartySr();
}
function selectParty(p){
  $('partySelect').value=p.id;$('partySearchInput').value=p.name;
  $('partyGstin').value=p.gstin||'';$('partyMobile').value=p.mobile||'';
  setPartyBalance(p);
  if(p.address||p.addr1){
    STATE.books.billing.forEach(function(a){a.selected=false;});
    var ex=STATE.books.billing.filter(function(a){return a.id==='billing_party';})[0];
    var data={id:'billing_party',registrationType:p.registrationType||'',legalName:p.name,tradeName:p.tradeName||'',company:p.tradeName||p.name,gstin:p.gstin||'',pan:p.pan||'',line1:p.addr1||p.address,line2:p.addr2||'',place:p.place||'',city:p.city||'',pincode:p.pincode||'',state:p.state||stateOf(p.address),country:p.country||'India',selected:true};
    if(ex){Object.assign(ex,data);}else{STATE.books.billing.unshift(data);}
    renderCard('billing');syncShip();
  }
  closePartySr();recalcAll();
}
function initParty(){
  var inp=$('partySearchInput');
  inp.addEventListener('focus',function(){runPartySr(inp.value);});
  inp.addEventListener('input',function(){$('partySelect').value='';setPartyBalance(null);runPartySr(inp.value);});
  inp.addEventListener('click',function(e){e.stopPropagation();});
  inp.addEventListener('keydown',function(e){
    var n=STATE.pMatches.length;
    if(e.key==='ArrowDown'){e.preventDefault();if(n){STATE.pHi=(STATE.pHi+1)%n;renderPartySr();}}
    else if(e.key==='ArrowUp'){e.preventDefault();if(n){STATE.pHi=(STATE.pHi-1+n)%n;renderPartySr();}}
    else if(e.key==='Enter'){e.preventDefault();if(STATE.pMatches[STATE.pHi]){selectParty(STATE.pMatches[STATE.pHi]);}}
    else if(e.key==='Escape'){closePartySr();}
  });
  inp.addEventListener('blur',function(){setTimeout(closePartySr,150);});

  $('partyGstin').addEventListener('input',function(){this.value=this.value.toUpperCase();});
  $('fetchPartyGstBtn').addEventListener('click',function(){
    var gi=$('partyGstin'),g=gi.value.trim().toUpperCase();
    if(g.length<15){toast('Enter a valid 15 character GSTIN','fa-triangle-exclamation');gi.focus();return;}
    gi.value=g;
    var d=mockGstin(g);
    toast('Fetching GSTIN details...','fa-magnifying-glass');
    setTimeout(function(){
      var ex=STATE.books.billing.filter(function(a){return a.id==='billing_party';})[0];
      var data={id:'billing_party',registrationType:'regular',legalName:d.name,tradeName:'',company:d.name,gstin:g,pan:'',line1:d.line1,line2:'',place:d.city,city:d.city,pincode:d.pincode,state:d.state,country:'India',selected:true};
      STATE.books.billing.forEach(function(a){a.selected=false;});
      if(ex){Object.assign(ex,data);}else{STATE.books.billing.unshift(data);}
      renderCard('billing');syncShip();recalcAll();
      toast('GSTIN details fetched successfully');
    },400);
  });

  var reg=$('newPartyRegType');
  function upd(){
    var v=reg.value,gw=$('newPartyGstPanGroup'),tw=$('newPartyTradeGroup');
    if(v==='regular'||v==='composition'||v==='tds'){gw.hidden=false;tw.hidden=false;$('newPartyGstPanLabel').textContent='GST Number';}
    else if(v==='unregistered'){gw.hidden=false;tw.hidden=true;$('newPartyGstPanLabel').textContent='PAN Number';}
    else{gw.hidden=true;tw.hidden=true;}
  }
  reg.addEventListener('change',upd);upd();
  $('fetchGstinPartyBtn').addEventListener('click',function(){
    var g=$('newPartyGstin').value.trim();
    if(g.length<15){toast('Enter a valid 15 character GSTIN','fa-triangle-exclamation');return;}
    var d=mockGstin(g);
    $('newPartyName').value=d.name;$('newPartyAddr1').value=d.line1;$('newPartyPlace').value=d.city;$('newPartyPincode').value=d.pincode;
    stateOpts($('newPartyState'),d.state);toast('GSTIN details fetched successfully');
  });
  $('savePartyBtn').addEventListener('click',function(){
    function v(id){return $(id).value.trim();}
    var checks=[['newPartyName','Legal name','pb'],['newPartyPincode','Pin code','pa'],['newPartyState','State','pa'],['newPartyCountry','Country','pa']];
    for(var i=0;i<checks.length;i++){
      if(!v(checks[i][0])){toast(checks[i][1]+' is required','fa-triangle-exclamation');qs('#addPartyModal [data-tab="'+checks[i][2]+'"]').click();$(checks[i][0]).focus();return;}
    }
    var r=reg.value,gp=v('newPartyGstin'),isG=(r==='regular'||r==='composition'||r==='tds');
    var address=[v('newPartyAddr1'),v('newPartyAddr2'),v('newPartyPlace'),v('newPartyCity'),$('newPartyState').value,v('newPartyPincode')].filter(Boolean).join(', ');
    var ob=qs('input[name="newPartyObType"]:checked'),obAmt=parseFloat(v('newPartyObAmount'))||0,obType=ob?ob.value:'Dr';
    var np={id:'p_'+Date.now(),name:v('newPartyName'),tradeName:v('newPartyTradeName'),gstin:isG?gp:'',pan:r==='unregistered'?gp:v('newPartyPan'),addr1:v('newPartyAddr1'),addr2:v('newPartyAddr2'),place:v('newPartyPlace'),city:v('newPartyCity'),state:$('newPartyState').value,pincode:v('newPartyPincode'),country:$('newPartyCountry').value,address:address,mobile:v('newPartyPhone1'),email:v('newPartyEmail'),registrationType:r,businessEntity:$('newPartyEntity').value,openingBalance:obAmt,openingBalanceType:obType,openingBalanceDate:v('newPartyObDate'),creditLimit:parseFloat(v('newPartyCreditLimit'))||0,balance:obAmt,balanceType:obType};
    SEED.parties.push(np);selectParty(np);
    qsa('#addPartyModal input:not([type=radio]), #addPartyModal select').forEach(function(i){i.value='';});
    stateOpts($('newPartyState'),'');countryOpts($('newPartyCountry'),'India');
    $('newPartyObAmount').value='0.00';$('newPartyCreditLimit').value='0.00';upd();
    qs('#addPartyModal [data-tab="pb"]').click();
    closeModal('addPartyModal');toast('Party "'+np.name+'" added','fa-user-plus');
  });
}

function addItemRow(){
  var tb=$('itemTableBody'),tr=document.createElement('tr');
  tr.className='item-row';tr.dataset.cessRate=0;
  tr.innerHTML=
    '<td class="c-sr ro" style="text-align:center;padding:6px;">'+(tb.children.length+1)+'</td>'+
    '<td class="c-item"><div class="ibox"><input type="text" class="js-item-search" placeholder="'+(STATE.invoiceMode==='accounting'?'Search ledger...':'Search item...')+'" autocomplete="off"><button type="button" class="btn btn-o js-price-history" title="Price History"><i class="fa-solid fa-clock-rotate-left"></i></button><button type="button" class="btn btn-add js-add-item" title="Add new item"><i class="fa-solid fa-plus"></i></button></div><div class="row-desc-wrap"><input type="text" class="row-itemdesc" placeholder="Item description"></div></td>'+
    '<td class="c-grp"><select class="row-itemgroup"></select></td>'+
    '<td class="c-hsn"><input type="text" class="row-hsn" maxlength="8"></td>'+
    '<td class="c-gd"><select class="row-godown"></select></td>'+
    '<td class="c-uom"><select class="js-uom" data-entity="uom"></select></td>'+
    '<td class="c-sku"><input type="text" class="row-sku"></td>'+
    '<td class="c-qty num"><input type="number" class="row-qty" value="1" min="0" step="0.01"></td>'+
    '<td class="c-mrp num"><input type="number" class="row-mrp" value="0" min="0" step="0.01"></td>'+
    '<td class="c-price num"><input type="number" class="row-price" value="0" min="0" step="0.01"></td>'+
    '<td class="c-gst"><select class="row-gst"></select></td>'+
    '<td class="c-d1"><div class="dcell"><select class="row-d1t"><option value="flat">\u20b9</option><option value="pct">%</option></select><input type="number" class="row-d1v" value="0" min="0" step="0.01"></div></td>'+
    '<td class="c-d2"><div class="dcell"><select class="row-d2t"><option value="flat">\u20b9</option><option value="pct">%</option></select><input type="number" class="row-d2v" value="0" min="0" step="0.01"></div></td>'+
    '<td class="c-td ro row-td">0.00</td><td class="c-tx ro row-taxable">0.00</td><td class="c-tax ro row-tax">0.00</td><td class="c-cess ro row-cess">0.00</td><td class="c-tot ro row-total">0.00</td>'+
    '<td class="c-act"><button type="button" class="row-delete"><i class="fa-solid fa-trash"></i></button></td>';
  tb.appendChild(tr);
  opts(qs('.js-uom',tr),SEED.uoms,'Select UOM');
  rateOpts(qs('.row-gst',tr),SEED.gstRates,0);
  opts(qs('.row-godown',tr),SEED.godowns,'Select Godown');
  opts(qs('.row-itemgroup',tr),SEED.categories,'None');
  var s=qs('.js-item-search',tr);
  s.addEventListener('focus',function(){runItemSr(tr,s.value);});
  s.addEventListener('input',function(){runItemSr(tr,s.value);});
  s.addEventListener('click',function(e){e.stopPropagation();});
  s.addEventListener('keydown',function(e){
    var n=STATE.matches.length;
    if(e.key==='ArrowDown'){e.preventDefault();if(n){STATE.hi=(STATE.hi+1)%n;renderItemSr();}}
    else if(e.key==='ArrowUp'){e.preventDefault();if(n){STATE.hi=(STATE.hi-1+n)%n;renderItemSr();}}
    else if(e.key==='Enter'){e.preventDefault();if(STATE.matches[STATE.hi]){pickItem(STATE.matches[STATE.hi]);}}
    else if(e.key==='Escape'){closeItemSr();}
  });
  s.addEventListener('blur',function(){setTimeout(closeItemSr,150);});
  qs('.js-add-item',tr).addEventListener('click',function(e){e.stopPropagation();STATE.targetRow=tr;openModal('addItemModal');});
  qs('.js-price-history',tr).addEventListener('click',function(e){
    e.stopPropagation();
    var id=tr.dataset.itemId;
    if(!id||STATE.invoiceMode==='accounting'){toast('Select an item first to view its price history','fa-triangle-exclamation');return;}
    var it=SEED.items.filter(function(x){return x.id===id;})[0];
    if(it){openPriceHistory(tr,it);}
  });
  qsa('input,select',tr).forEach(function(el){
    if(el===s||el.classList.contains('row-itemdesc')){return;}
    el.addEventListener('input',recalcAll);el.addEventListener('change',recalcAll);
  });
  qs('.row-delete',tr).addEventListener('click',function(){tr.remove();renumber();recalcAll();});
  renumber();recalcAll();
  return tr;
}
function renumber(){qsa('#itemTableBody .item-row').forEach(function(tr,i){qs('.c-sr',tr).textContent=i+1;});}

function recalcRow(tr){
  var mode=$('unitPriceMode').value;
  var qty=parseFloat(qs('.row-qty',tr).value)||0,price=parseFloat(qs('.row-price',tr).value)||0;
  var d1t=qs('.row-d1t',tr).value,d1v=parseFloat(qs('.row-d1v',tr).value)||0,d2t=qs('.row-d2t',tr).value,d2v=parseFloat(qs('.row-d2v',tr).value)||0;
  var gr=parseFloat(qs('.row-gst',tr).value)||0,cr=parseFloat(tr.dataset.cessRate)||0;
  var gross=qty*price,base=mode==='with'?gross/(1+gr/100):gross;
  var d1=d1t==='pct'?base*d1v/100:d1v,a1=Math.max(base-d1,0);
  var d2=d2t==='pct'?a1*d2v/100:d2v,tx=Math.max(a1-d2,0);
  var gst=tx*gr/100,cess=tx*cr/100,tot=tx+gst+cess;
  qs('.row-td',tr).textContent=(d1+d2).toFixed(2);
  qs('.row-taxable',tr).textContent=tx.toFixed(2);
  qs('.row-tax',tr).textContent=gst.toFixed(2);
  qs('.row-cess',tr).textContent=cess.toFixed(2);
  qs('.row-total',tr).textContent=tot.toFixed(2);
  return {qty:qty,taxable:tx,gst:gst,cess:cess,total:tot};
}

function chargeRow(r){
  var a=parseFloat(qs('.c-amt',r).value)||0,dt=qs('.c-dt',r).value,dv=parseFloat(qs('.c-dv',r).value)||0,g=parseFloat(qs('.c-gst',r).value)||0;
  var x=a-(dt==='pct'?a*dv/100:dv),t=x+x*g/100;
  qs('.tot',r).textContent=t.toFixed(2);return t;
}
function addLessRowCalc(r){
  var a=parseFloat(qs('.al-amt',r).value)||0,sg=qs('.al-sign',r).value,inc=qs('.al-inc',r).checked,s=sg==='less'?-a:a;
  qs('.tot',r).textContent=s.toFixed(2);return {s:s,inc:inc};
}

function recalcAll(){
  var tx=0,gs=0,q=0,cl=0,it=0;
  qsa('#itemTableBody .item-row').forEach(function(tr){var r=recalcRow(tr);tx+=r.taxable;gs+=r.gst;q+=r.qty;cl+=r.cess;it+=r.total;});
  $('footQty').textContent=q.toFixed(2);$('footTaxable').textContent=tx.toFixed(2);$('footTax').textContent=gs.toFixed(2);$('footCess').textContent=cl.toFixed(2);$('footTotal').textContent=it.toFixed(2);
  var bill=STATE.books.billing.filter(function(a){return a.selected;})[0],disp=STATE.books.dispatch.filter(function(a){return a.selected;})[0];
  var inter=!!(bill&&disp&&bill.state&&disp.state&&bill.state!==disp.state);
  var cgst=inter?0:gs/2,sgst=inter?0:gs/2,igst=inter?gs:0;
  var cess=(parseFloat($('cessInput').value)||0)+cl;
  var ch=0;qsa('#additionalChargesRows .crow').forEach(function(r){ch+=chargeRow(r);});
  $('sumCharges').textContent=money(ch);
  var al=0,adj=0;qsa('#addLessRows .crow').forEach(function(r){var x=addLessRowCalc(r);al+=x.s;if(x.inc){adj+=x.s;}});
  $('sumAddLess').textContent=money(al);
  var dt=tx+adj;
  $('sumTaxable').textContent=money(dt);$('sumCgst').textContent=money(cgst);$('sumSgst').textContent=money(sgst);$('sumIgst').textContent=money(igst);
  var tcsP=$('cfgTcs').checked?(parseFloat($('tcsPctInput').value)||0):0,tdsP=$('cfgTds').checked?(parseFloat($('tdsPctInput').value)||0):0;
  var tcs=dt*tcsP/100,tds=dt*tdsP/100;
  $('tcsAmountInput').value=tcs.toFixed(2);$('tdsAmountInput').value=tds.toFixed(2);
  var pre=dt+cgst+sgst+igst+cess+ch+al+tcs-tds,m=$('cfgRoundOffMethod').value,ro=$('roundOffInput');
  if(m==='normal'){ro.value=(Math.round(pre)-pre).toFixed(2);}
  else if(m==='up'){ro.value=(Math.ceil(pre)-pre).toFixed(2);}
  else if(m==='down'){ro.value=(Math.floor(pre)-pre).toFixed(2);}
  else{ro.value='0.00';}
  $('sumGrand').textContent=money(pre+(parseFloat(ro.value)||0));
}

function addCharge(){
  var w=$('additionalChargesRows'),r=document.createElement('div');r.className='crow';
  r.innerHTML='<select class="c-led" data-entity="ledger"></select><button type="button" class="btn btn-add btn-ic" style="width:36px;height:34px;" data-quick="ledger"><i class="fa-solid fa-plus"></i></button><select class="c-dt"><option value="flat">\u20b9</option><option value="pct">%</option></select><input type="number" class="c-dv" value="0" step="0.01" placeholder="Disc."><input type="number" class="c-amt" value="0" step="0.01" placeholder="Amount"><select class="c-gst"></select><span class="tot">0.00</span><button type="button" class="row-delete"><i class="fa-solid fa-xmark"></i></button>';
  w.appendChild(r);
  opts(qs('.c-led',r),SEED.ledgers,'Select Ledger');rateOpts(qs('.c-gst',r),SEED.gstRates,0);
  qsa('input,select',r).forEach(function(e){e.addEventListener('input',recalcAll);e.addEventListener('change',recalcAll);});
  qs('.row-delete',r).addEventListener('click',function(){r.remove();recalcAll();});
  recalcAll();
}
function addLess(){
  var w=$('addLessRows'),r=document.createElement('div');r.className='crow al';
  r.innerHTML='<select class="c-led" data-entity="ledger"></select><button type="button" class="btn btn-add btn-ic" style="width:36px;height:34px;" data-quick="ledger"><i class="fa-solid fa-plus"></i></button><select class="al-sign"><option value="add">Add</option><option value="less">Less</option></select><input type="number" class="al-amt" value="0" step="0.01" placeholder="Amount"><label><input type="checkbox" class="al-inc"> In Assessable</label><label><input type="checkbox" class="al-g1" checked> Affect GSTR-1</label><span class="tot">0.00</span><button type="button" class="row-delete"><i class="fa-solid fa-xmark"></i></button>';
  w.appendChild(r);
  opts(qs('.c-led',r),SEED.ledgers,'Select Ledger');
  qsa('input,select',r).forEach(function(e){e.addEventListener('input',recalcAll);e.addEventListener('change',recalcAll);});
  qs('.row-delete',r).addEventListener('click',function(){r.remove();recalcAll();});
  recalcAll();
}

function recalcPay(){
  var t=0;
  qsa('#payTableBody .pay-row').forEach(function(r){t+=parseFloat(qs('.pay-amount',r).value)||0;});
  $('payFootTotal').textContent=t.toFixed(2);
  $('paySummary').textContent=money(t);
}
function addPayRow(){
  var tb=$('payTableBody'),tr=document.createElement('tr');
  tr.className='pay-row';
  tr.innerHTML=
    '<td class="p-led"><div class="ibox"><select class="pay-ledger"></select><button type="button" class="btn btn-add pay-add-ledger" title="Add payment ledger"><i class="fa-solid fa-plus"></i></button></div></td>'+
    '<td class="p-date"><input type="date" class="pay-date"></td>'+
    '<td class="p-amt num"><input type="number" class="pay-amount" value="0" min="0" step="0.01"></td>'+
    '<td class="p-mode"><select class="pay-mode"></select></td>'+
    '<td class="p-ref"><input type="text" class="pay-ref" placeholder="Reference number"></td>'+
    '<td class="p-act"><button type="button" class="row-delete" title="Delete"><i class="fa-solid fa-trash"></i></button></td>';
  tb.appendChild(tr);
  opts(qs('.pay-ledger',tr),SEED.paymentLedgers,'Select Ledger');
  opts(qs('.pay-mode',tr),PAY_MODES,'Select Mode');
  qs('.pay-date',tr).value=$('invoiceDate').value||todayStr();
  qs('.pay-amount',tr).addEventListener('input',recalcPay);
  qs('.pay-add-ledger',tr).addEventListener('click',function(e){
    e.stopPropagation();
    STATE.payTarget=qs('.pay-ledger',tr);
    $('plName').value='';
    opts($('plGroup'),SEED.ledgerGroups,'Select Group','');
    openModal('payLedgerModal');
  });
  qs('.row-delete',tr).addEventListener('click',function(){tr.remove();recalcPay();});
  recalcPay();
  return tr;
}
function setPayOpen(open){
  var sec=$('paymentSec');
  sec.classList.toggle('open',open);
  $('payBody').hidden=!open;
  $('payToggle').setAttribute('aria-expanded',open?'true':'false');
  if(open&&!qsa('#payTableBody .pay-row').length){addPayRow();}
}
function initPayment(){
  $('payToggle').addEventListener('click',function(){setPayOpen(!$('paymentSec').classList.contains('open'));});
  $('addPayRowBtn').addEventListener('click',function(){addPayRow();});
  $('plAddGroupBtn').addEventListener('click',function(){
    $('plgName').value='';
    opts($('plgParent'),SEED.ledgerGroups,'Primary (No Parent)','');
    openModal('payGroupModal');
  });
  $('savePayGroupBtn').addEventListener('click',function(){
    var name=$('plgName').value.trim();
    if(!name){toast('Group name is required','fa-triangle-exclamation');$('plgName').focus();return;}
    var dup=SEED.ledgerGroups.some(function(g){return g.name.toLowerCase()===name.toLowerCase();});
    if(dup){toast('This group already exists','fa-triangle-exclamation');$('plgName').focus();return;}
    var g={id:'lg_'+Date.now(),name:name,parent:$('plgParent').value};
    SEED.ledgerGroups.push(g);
    opts($('plGroup'),SEED.ledgerGroups,'Select Group',g.id);
    closeModal('payGroupModal');
    toast('Group "'+name+'" added','fa-layer-group');
  });
  $('savePayLedgerBtn').addEventListener('click',function(){
    var name=$('plName').value.trim(),group=$('plGroup').value;
    if(!name){toast('Ledger name is required','fa-triangle-exclamation');$('plName').focus();return;}
    if(!group){toast('Group is required','fa-triangle-exclamation');$('plGroup').focus();return;}
    var dup=SEED.paymentLedgers.some(function(l){return l.name.toLowerCase()===name.toLowerCase();});
    if(dup){toast('This ledger already exists','fa-triangle-exclamation');$('plName').focus();return;}
    var l={id:'pay_'+Date.now(),name:name,group:group};
    SEED.paymentLedgers.push(l);
    qsa('.pay-ledger').forEach(function(s){var o=document.createElement('option');o.value=l.id;o.textContent=name;s.appendChild(o);});
    if(STATE.payTarget){STATE.payTarget.value=l.id;}
    closeModal('payLedgerModal');
    toast('Ledger "'+name+'" added','fa-book');
  });
}

function setMode(mode){
  STATE.invoiceMode=mode;
  $('itemTable').classList.toggle('m-acc',mode==='accounting');
  $('itemColHeader').textContent=mode==='accounting'?'Ledger':'Item Name';
  qsa('.js-item-search').forEach(function(i){i.placeholder=mode==='accounting'?'Search ledger...':'Search item...';i.value='';});
  closeItemSr();recalcAll();
}

function loadQuotation(q){
  var p=SEED.parties.filter(function(x){return x.id===q.party_id;})[0];
  if(p){selectParty(p);}
  $('itemTableBody').innerHTML='';
  q.items.forEach(function(l){
    var it=SEED.items.filter(function(x){return x.id===l.item_id;})[0],tr=addItemRow();
    if(it){qs('.js-item-search',tr).value=it.name;applyItem(tr,it);}
    qs('.row-qty',tr).value=l.qty;qs('.row-price',tr).value=l.price;
  });
  if(q.terms){$('cfgTerms').checked=true;$('termsText').value=q.terms;applyConfig();}
  recalcAll();
}

function applyConfig(){
  var t=$('itemTable');
  [['cfgDiscount1','h-d1'],['cfgDiscount2','h-d2'],['cfgTotalDiscount','h-td'],['cfgSku','h-sku'],['cfgItemDesc','h-desc'],['cfgMrp','h-mrp'],['cfgGodown','h-gd'],['cfgItemGroup','h-grp'],['cfgPriceList','h-ph']].forEach(function(p){t.classList.toggle(p[1],!$(p[0]).checked);});
  $('fCredit').hidden=!$('cfgCreditPeriod').checked;
  var est=$('cfgEstimateQuotation').checked,so=$('cfgSaleOrder').checked;
  $('fSaleOrder').hidden=!so;$('fQuote').hidden=!est;
  if(est){
    var s=$('estimateQuotationNumberSelect'),cur=s.value;
    s.innerHTML='<option value="">Select</option>';
    SEED.quotations.forEach(function(q){var o=document.createElement('option');o.value=q.number;o.textContent=q.number;s.appendChild(o);});
    s.value=cur;
  }
  $('uploadSec').hidden=!$('cfgUploadDocument').checked;
  $('bankSec').hidden=!$('cfgBankDetails').checked;
  $('termsSec').hidden=!$('cfgTerms').checked;
  $('noteSec').hidden=!$('cfgNote').checked;
  var pe=$('cfgPayment').checked;
  $('paymentSec').hidden=!pe;
  if(!pe){setPayOpen(false);}
  $('cessRow').hidden=!$('cfgCess').checked;
  $('tcsRow').hidden=!$('cfgTcs').checked;
  $('tdsRow').hidden=!$('cfgTds').checked;
  recalcAll();
}

function syncCompliance(){
  var any=$('generateEwayBill').checked||$('generateEinvoice').checked;
  $('partBSection').classList.toggle('show',any);
  $('manualEwaySection').style.display=any?'none':'';
}

function initUpload(){
  var inp=$('docUpload'),box=$('uploadBox');
  function draw(){
    var l=$('uploadList');l.innerHTML='';
    STATE.uploaded.forEach(function(f,i){
      var c=document.createElement('div');c.className='fchip';
      c.innerHTML='<i class="fa-solid fa-paperclip"></i><span>'+esc(f.name)+'</span><button type="button"><i class="fa-solid fa-xmark"></i></button>';
      qs('button',c).addEventListener('click',function(){STATE.uploaded.splice(i,1);draw();});
      l.appendChild(c);
    });
  }
  inp.addEventListener('change',function(){Array.prototype.forEach.call(inp.files,function(f){STATE.uploaded.push(f);});draw();inp.value='';});
  ['dragenter','dragover'].forEach(function(ev){box.addEventListener(ev,function(){box.classList.add('drag');});});
  ['dragleave','drop'].forEach(function(ev){box.addEventListener(ev,function(){box.classList.remove('drag');});});
  STATE.drawUploads=draw;
}

function recalcOpening(){
  var tq=0,tt=0,tw=0,tm=0;
  qsa('#openingStockRows .os-row').forEach(function(r){
    var q=parseFloat(qs('.os-qty',r).value)||0,rt=parseFloat(qs('.os-rate',r).value)||0,mr=parseFloat(qs('.os-mrp',r).value)||0;
    tq+=q;tt+=parseFloat(qs('.os-taxable',r).value)||0;tw+=q*rt;tm+=q*mr;
  });
  var s=$('openingStockSummaryRow');
  qs('.os-total-qty',s).value=tq.toFixed(2);
  qs('.os-avg-rate',s).value=(tq>0?tw/tq:0).toFixed(2);
  qs('.os-total-taxable',s).value=tt.toFixed(2);
  qs('.os-total-mrp',s).value=tm>0?tm.toFixed(2):'N/A';
}
function addOpeningRow(){
  var w=$('openingStockRows'),r=document.createElement('div');r.className='os-row';
  r.innerHTML='<div class="fld"><label>Stock Quantity</label><input type="number" class="os-qty" placeholder="0" step="0.01" value="0"></div>'+
    '<div class="fld"><label>MRP</label><input type="number" class="os-mrp" placeholder="0" step="0.01" value="0"></div>'+
    '<div class="fld"><label>Stock Rate (Excluding GST)</label><input type="number" class="os-rate" placeholder="0" step="0.01" value="0"></div>'+
    '<div class="fld"><label>Stock Total Value</label><input type="text" class="os-taxable" readonly value="0.00"></div>'+
    '<button type="button" class="btn btn-del btn-sm os-remove" style="grid-column:1/-1;justify-self:end;"><i class="fa-solid fa-trash"></i> Remove Row</button>';
  w.appendChild(r);
  function calc(){qs('.os-taxable',r).value=((parseFloat(qs('.os-qty',r).value)||0)*(parseFloat(qs('.os-rate',r).value)||0)).toFixed(2);recalcOpening();}
  qsa('input',r).forEach(function(i){i.addEventListener('input',calc);});
  qs('.os-remove',r).addEventListener('click',function(){
    if(qsa('#openingStockRows .os-row').length>1){r.remove();recalcOpening();}
    else{toast('At least one opening stock row is required','fa-triangle-exclamation');}
  });
  recalcOpening();
}
function resetOpening(){$('openingStockRows').innerHTML='';addOpeningRow();}

function initItemModal(){
  var hsnMap={'4001':'Natural rubber, balata, gutta-percha, guayule, chicle and similar natural gums, in primary forms or in plates, sheets or strip','4002':'Synthetic rubber and factice derived from oils, in primary forms or in plates, sheets or strip','4005':'Compounded rubber, unvulcanised, in primary forms or in plates, sheets or strip','4011':'New pneumatic tyres, of rubber','4016':'Other articles of vulcanised rubber other than hard rubber'};
  $('newItemHsn').addEventListener('input',function(){
    var v=this.value.trim();
    $('newItemHsnDesc').value=v.length<2?'':(hsnMap[v.substring(0,4)]||(v.substring(0,2)==='40'?'Rubber and articles thereof':'Description not available for this HSN code'));
  });
  $('newItemDescSameAsName').addEventListener('change',function(){
    var d=$('newItemDescription');
    if(this.checked){d.value=$('newItemName').value;d.readOnly=true;}else{d.readOnly=false;}
  });
  $('newItemName').addEventListener('input',function(){
    if($('newItemDescSameAsName').checked){$('newItemDescription').value=this.value;}
  });
  function calcStock(){
    var q=parseFloat($('newItemStockQty').value)||0,r=parseFloat($('newItemStockRate').value)||0;
    $('newItemStockTotal').value=(q*r).toFixed(2);
  }
  $('newItemStockQty').addEventListener('input',calcStock);
  $('newItemStockRate').addEventListener('input',calcStock);

  var panel=$('itemFieldSettingsPanel'),gb=$('itemFieldSettingsBtn'),KEY='hkItemOptionalFields';
  var chks=qsa('input[type="checkbox"]',panel);
  function apply(){
    chks.forEach(function(c){
      var k=c.getAttribute('data-field');
      qsa('#addItemModal .opt-field[data-field="'+k+'"]').forEach(function(el){el.classList.toggle('mm-hide',!c.checked);});
    });
  }
  try{
    var raw=localStorage.getItem(KEY);
    if(raw){
      var st=JSON.parse(raw);
      chks.forEach(function(c){var k=c.getAttribute('data-field');if(Object.prototype.hasOwnProperty.call(st,k)){c.checked=st[k];}});
    }
  }catch(e){}
  apply();
  chks.forEach(function(c){
    c.addEventListener('change',function(){
      apply();
      try{var o={};chks.forEach(function(x){o[x.getAttribute('data-field')]=x.checked;});localStorage.setItem(KEY,JSON.stringify(o));}catch(e){}
    });
  });
  gb.addEventListener('click',function(e){e.stopPropagation();panel.classList.toggle('show');gb.classList.toggle('active',panel.classList.contains('show'));});
  panel.addEventListener('click',function(e){e.stopPropagation();});
  document.addEventListener('click',function(){panel.classList.remove('show');gb.classList.remove('active');});

  $('saveItemBtn').addEventListener('click',function(){
    var name=$('newItemName').value.trim();
    if(!name){toast('Item name is required','fa-triangle-exclamation');$('newItemName').focus();return;}
    if(!$('newItemPrimaryUom').value){toast('Primary unit of measurement is required','fa-triangle-exclamation');$('newItemPrimaryUom').focus();return;}
    if($('newItemGstRate').value===''){toast('GST rate is required','fa-triangle-exclamation');$('newItemGstRate').focus();return;}
    var qty=parseFloat($('newItemStockQty').value)||0,rate=parseFloat($('newItemStockRate').value)||0;
    var it={
      id:'i_'+Date.now(),name:name,category:$('newItemCategory').value,uom:$('newItemPrimaryUom').value,uom2:$('newItemSecondaryUom').value,
      description:$('newItemDescription').value.trim(),price:rate,gst:parseFloat($('newItemGstRate').value)||0,hsn:$('newItemHsn').value.trim(),
      sku:$('newItemSku').value.trim(),mrp:0,cess:parseFloat($('newItemCessRate').value)||0,rcm:$('newItemRcmToggle').checked,itemType:'goods',
      openingStockDate:$('newItemOpeningDate').value,rateDecimal:$('newItemDecimalRate').value,stockQty:qty,stockRate:rate,
      reorderLevel:parseFloat($('newItemReorderQty').value)||0,batch:$('newItemBatch').value.trim(),expiry:$('newItemExpiry').value.trim(),
      negativeStock:$('newItemNegStock').checked,totalStock:qty,stockByGodown:{},priceHistory:[]
    };
    SEED.godowns.forEach(function(g,i){it.stockByGodown[g.id]={qty:i===0?qty:0,rate:rate,mrp:0};});
    SEED.items.push(it);
    if(STATE.targetRow){applyItem(STATE.targetRow,it);qs('.js-item-search',STATE.targetRow).value=name;}
    $('addItemForm').reset();
    $('newItemDescription').readOnly=false;
    $('newItemHsnDesc').value='';
    $('newItemStockTotal').value='';
    closeModal('addItemModal');
    toast('Item "'+name+'" added','fa-box');
  });
}

function validateSale(){
  var bill=STATE.books.billing.filter(function(a){return a.selected;})[0];
  if(!$('partySelect').value||!bill){toast('Please select a party before saving','fa-triangle-exclamation');$('partySearchInput').focus();return false;}
  var rows=qsa('#itemTableBody .item-row');
  if(!rows.length){toast('Add at least one item line','fa-triangle-exclamation');return false;}
  var ok=false;
  rows.forEach(function(tr){var q=parseFloat(qs('.row-qty',tr).value)||0,l=qs('.js-item-search',tr).value||tr.dataset.itemName;if(q>0&&l){ok=true;}});
  if(!ok){toast('Each line item needs an item and a quantity greater than zero','fa-triangle-exclamation');return false;}
  if(!$('invoiceDate').value){toast('Invoice date is required','fa-triangle-exclamation');return false;}
  if(!$('paymentSec').hidden){
    var bad=false;
    qsa('#payTableBody .pay-row').forEach(function(r){
      var a=parseFloat(qs('.pay-amount',r).value)||0;
      if(a>0&&(!qs('.pay-ledger',r).value||!qs('.pay-mode',r).value)){bad=true;}
    });
    if(bad){toast('Select a payment ledger and mode for every payment with an amount','fa-triangle-exclamation');setPayOpen(true);return false;}
  }
  return true;
}

function resetSale(){
  $('itemTableBody').innerHTML='';$('additionalChargesRows').innerHTML='';$('addLessRows').innerHTML='';$('payTableBody').innerHTML='';
  ['partySelect','partySearchInput','partyGstin','partyMobile','termsText','noteText','transporterGstin','documentDate','documentNumber','vehicleNumber','ewayBillNumber','ewayBillDate','distance'].forEach(function(id){$(id).value='';});
  setPartyBalance(null);
  $('transporterSelect').value='';
  $('transactionType').value='Regular';$('vehicleType').value='Regular';$('transporterMode').value='Road';
  STATE.books.billing=[];STATE.books.shipping=[];
  renderCard('billing');renderCard('shipping');
  $('shipSameAsBilling').checked=true;
  ['generateEwayBill','generateEinvoice','generateDeliveryChallan'].forEach(function(id){$(id).checked=false;});
  syncCompliance();
  $('cessInput').value=0;$('tcsPctInput').value=0;$('tdsPctInput').value=0;$('roundOffInput').value=0;
  $('estimateSaleInputValue').value=50;$('estimateQuotationNumberSelect').value='';
  var cs=seriesById($('invoiceSeries').value),n=(parseInt($('invoiceNumber').value,10)||(cs?cs.next:30))+1;
  if(cs){cs.next=n;}
  $('invoiceNumber').value=n;
  STATE.uploaded=[];$('uploadList').innerHTML='';
  setPayOpen(false);recalcPay();
  addItemRow();recalcAll();
}

function syncFixedBottom(){
  var sb=$('sidebar'),fb=$('fixedBottom');
  if(!sb||!fb){return;}
  if(window.innerWidth<=768){fb.style.left='0';}
  else{fb.style.left=sb.classList.contains('collapsed')?'64px':'236px';}
}

function closeAllDropdowns(except){
  qsa('.dropdown-panel.show').forEach(function(p){if(p!==except){p.classList.remove('show');}});
  closeItemSr();closePartySr();
}
function wireDropdown(b,p){
  var bt=$(b),pn=$(p);if(!bt||!pn){return;}
  bt.addEventListener('click',function(e){
    e.stopPropagation();
    var s=!pn.classList.contains('show');
    closeAllDropdowns();
    if(s){pn.classList.add('show');}
  });
}

function initHeader(){
  wireDropdown('notifBtn','notifPanel');wireDropdown('phoneBtn','phonePanel');wireDropdown('profileBtn','profilePanel');
  document.addEventListener('click',function(){closeAllDropdowns();});
  var mt=$('mobileToggle'),sb=$('sidebar'),ov=$('overlayBg');
  if(mt&&sb){mt.addEventListener('click',function(){sb.classList.add('mobile-open');if(ov){ov.classList.add('show');}});}
  if(ov&&sb){ov.addEventListener('click',function(){sb.classList.remove('mobile-open');ov.classList.remove('show');});}
  var cb=$('collapseBtn'),mw=$('mainWrap');
  if(cb&&sb&&mw){cb.addEventListener('click',function(){sb.classList.toggle('collapsed');mw.classList.toggle('collapsed');syncFixedBottom();});}
  window.addEventListener('resize',syncFixedBottom);
  syncFixedBottom();
  qsa('.toggle-sub').forEach(function(link){
    link.addEventListener('click',function(e){
      e.stopPropagation();
      var item=link.closest('.menu-item'),pl=item.parentElement,open=item.classList.contains('open');
      qsa(':scope > .menu-item.open',pl).forEach(function(sib){if(sib!==item){sib.classList.remove('open');}});
      item.classList.toggle('open',!open);
    });
  });
  var cs=$('companySwitch');
  if(cs){cs.addEventListener('change',function(){toast('Switched to '+cs.value,'fa-building');});}
  var fs=$('fySwitch');
  if(fs){fs.addEventListener('change',function(){toast('Financial year set to '+fs.value,'fa-calendar');});}
  qsa('[data-nav]').forEach(function(btn){
    btn.addEventListener('click',function(){
      var t=btn.getAttribute('data-nav');
      if(window.location.pathname.indexOf(t)!==-1){toast('You are already on this screen','fa-circle-info');return;}
      window.location.href=t;
    });
  });
  var sbn=$('searchBtn');
  if(sbn){sbn.addEventListener('click',function(){var q=window.prompt('Search transactions, parties or items');if(q){toast('Searching for "'+q+'"','fa-magnifying-glass');}});}
  var cu=$('contactUsLink');if(cu){cu.addEventListener('click',function(){toast('Support: +91 9978478401','fa-headset');});}
  var sq=$('submitQueryLink');if(sq){sq.addEventListener('click',function(){toast('Suggestion form opened','fa-circle-question');});}
  var lo=$('logoutOtherDevices');
  if(lo){lo.addEventListener('click',function(){if(window.confirm('Logout from all other active devices?')){toast('Logged out from other devices','fa-right-from-bracket');}});}
  var so=$('signOutLink');
  if(so){so.addEventListener('click',function(){if(window.confirm('Are you sure you want to sign out?')){toast('Signed out','fa-right-from-bracket');}});}
  var ocp=$('openChangePassword');
  if(ocp){ocp.addEventListener('click',function(){openModal('changePasswordModal');});}
  var sp=$('savePasswordBtn');
  if(sp){
    sp.addEventListener('click',function(){
      var cur=$('currentPassword').value,nw=$('newPassword').value,cf=$('confirmPassword').value;
      if(!cur||!nw||!cf){toast('Please fill all password fields','fa-triangle-exclamation');return;}
      if(nw.length<6){toast('New password must be at least 6 characters','fa-triangle-exclamation');return;}
      if(nw!==cf){toast('New password and confirm password do not match','fa-triangle-exclamation');return;}
      $('changePasswordForm').reset();closeModal('changePasswordModal');toast('Password changed successfully');
    });
  }
  var nr=$('notifRefresh');
  if(nr){nr.addEventListener('click',function(){toast('Notifications refreshed','fa-arrows-rotate');});}
}

function initGlobal(){
  document.addEventListener('click',function(e){
    var o=e.target.closest('[data-open]');
    if(o){openModal(o.getAttribute('data-open'));return;}
    var c=e.target.closest('[data-close]');
    if(c){var m=c.closest('.modal-overlay');if(m){m.classList.remove('show');}return;}
    var t=e.target.closest('.tabs button[data-tab]');
    if(t){
      var box=t.closest('.modal-box');
      qsa('.tabs button',box).forEach(function(b){b.classList.remove('on');});t.classList.add('on');
      qsa('.tp',box).forEach(function(p){p.classList.toggle('on',p.getAttribute('data-p')===t.getAttribute('data-tab'));});
    }
  });
  document.addEventListener('mousedown',function(e){
    if(e.target.classList&&e.target.classList.contains('modal-overlay')){e.target.classList.remove('show');}
  });
  document.addEventListener('keydown',function(e){
    if(e.key==='Escape'){var m=qsa('.modal-overlay.show').pop();if(m){m.classList.remove('show');}}
  });
  window.addEventListener('scroll',function(){
    if(STATE.activeRow){posSr($('itemSr'),qs('.js-item-search',STATE.activeRow));}
    if($('partySr').classList.contains('show')){posSr($('partySr'),$('partySearchInput'));}
  },true);
  window.addEventListener('resize',function(){
    if(STATE.activeRow){posSr($('itemSr'),qs('.js-item-search',STATE.activeRow));}
  });
}

document.addEventListener('DOMContentLoaded',function(){
  fillMasters();
  initHeader();
  initGlobal();
  initDatePickers();
  initSeries();
  initAddress();
  initQuick();
  initBank();
  initParty();
  initPayment();
  initItemModal();
  initUpload();
  initPriceHistory();
  addItemRow();
  $('addLineBtn').addEventListener('click',addItemRow);
  $('unitPriceMode').addEventListener('change',recalcAll);
  ['cessInput','tcsPctInput','tdsPctInput','roundOffInput'].forEach(function(id){$(id).addEventListener('input',recalcAll);});
  $('autoRoundBtn').addEventListener('click',function(){$('cfgRoundOffMethod').value='normal';recalcAll();toast('Round off calculated automatically','fa-calculator');});
  qsa('input[name="invoiceMode"]').forEach(function(r){r.addEventListener('change',function(){setMode(r.value);});});
  $('addChargeBtn').addEventListener('click',addCharge);
  $('addLessBtn').addEventListener('click',addLess);
  $('scanBarcodeBtn').addEventListener('click',function(){toast('Barcode scanner is ready to capture a code','fa-barcode');});
  $('configBtn').addEventListener('click',function(){openModal('saleConfigModal');});
  $('cfgEstimateQuotation').addEventListener('change',function(){if(this.checked){$('cfgSaleOrder').checked=false;}});
  $('cfgSaleOrder').addEventListener('change',function(){if(this.checked){$('cfgEstimateQuotation').checked=false;}});
  qsa('#saleConfigModal input,#saleConfigModal select').forEach(function(el){el.addEventListener('change',applyConfig);});
  $('estimateQuotationNumberSelect').addEventListener('change',function(){
    var n=this.value;if(!n){return;}
    var q=SEED.quotations.filter(function(x){return String(x.number)===String(n);})[0];
    if(q){loadQuotation(q);toast('Quotation #'+q.number+' details loaded','fa-file-invoice');}
  });
  $('generateEwayBill').addEventListener('change',syncCompliance);
  $('generateEinvoice').addEventListener('change',syncCompliance);
  syncCompliance();
  applyConfig();
  $('saveBtn').addEventListener('click',function(){if(validateSale()){toast('Sale invoice saved successfully');}});
  $('saveNewBtn').addEventListener('click',function(){if(validateSale()){toast('Sale invoice saved. Starting a new sale');resetSale();}});
  $('savePrintBtn').addEventListener('click',function(){if(validateSale()){toast('Sale invoice saved. Preparing print preview','fa-print');setTimeout(function(){window.print();},400);}});
  $('backBtn').addEventListener('click',function(){
    if(window.confirm('Leave this page? Unsaved changes will be lost.')){
      if(window.history.length>1){window.history.back();}else{window.location.href='dashboard.php';}
    }
  });
  $('prevTxnBtn').addEventListener('click',function(){var n=parseInt($('invoiceNumber').value,10)||1;if(n>1){$('invoiceNumber').value=n-1;toast('Loaded invoice #'+(n-1),'fa-clock-rotate-left');}});
  $('nextTxnBtn').addEventListener('click',function(){var n=(parseInt($('invoiceNumber').value,10)||1)+1;$('invoiceNumber').value=n;toast('Loaded invoice #'+n,'fa-clock-rotate-left');});
});
</script>
<script>
(function(){
  function init(){
    var left=document.querySelector('.topbar-left'),sec=document.querySelector('.topbar-right-secondary'),eye=document.getElementById('eyeToggle');
    if(!left||!sec||document.getElementById('ctrlDrawer')) return;
    var search=document.querySelector('.topbar-right > .icon-btn:not(#eyeToggle)');
    if(search) sec.insertBefore(search,sec.firstChild);
    if(eye) sec.insertBefore(eye,sec.firstChild);
    var coSel=document.querySelector('.company-select select'),fySel=document.querySelector('.fy-select select'),quick=document.querySelectorAll('.qbtn-group .qbtn');
    var btn=document.createElement('button');
    btn.className='icon-btn ctrl-btn';btn.id='ctrlBtn';btn.type='button';btn.setAttribute('aria-label','Open controls');
    btn.innerHTML='<i class="fa-solid fa-sliders"></i>';
    sec.appendChild(btn);
    var ov=document.createElement('div');ov.className='ctrl-overlay';ov.id='ctrlOverlay';
    var dr=document.createElement('aside');dr.className='ctrl-drawer';dr.id='ctrlDrawer';dr.setAttribute('aria-hidden','true');
    dr.innerHTML='<div class="ctrl-head"><span class="ctrl-title">Controls</span><button type="button" class="icon-btn ctrl-close" id="ctrlClose" aria-label="Close"><i class="fa-solid fa-xmark"></i></button></div><div class="ctrl-body"><div class="ctrl-field" id="ctrlCo"></div><div class="ctrl-field" id="ctrlFy"></div><div class="ctrl-label">Quick add</div><div class="ctrl-quick" id="ctrlQuick"></div></div>';
    document.body.appendChild(ov);document.body.appendChild(dr);
    if(coSel){var c=coSel.cloneNode(true);c.className='ctrl-select';c.selectedIndex=coSel.selectedIndex;document.getElementById('ctrlCo').appendChild(c);}
    if(fySel){var f=fySel.cloneNode(true);f.className='ctrl-select';f.selectedIndex=fySel.selectedIndex;document.getElementById('ctrlFy').appendChild(f);}
    quick.forEach(function(a){
      var q=a.cloneNode(true);q.className='';document.getElementById('ctrlQuick').appendChild(q);
      var on=function(){q.classList.add('is-hover');},off=function(){q.classList.remove('is-hover');};
      q.addEventListener('mouseenter',on);q.addEventListener('mouseleave',off);
      q.addEventListener('pointerenter',on);q.addEventListener('pointerleave',off);
      q.addEventListener('touchstart',on,{passive:true});q.addEventListener('touchend',function(){setTimeout(off,250);});q.addEventListener('touchcancel',off);
    });
    function openD(e){e.stopPropagation();document.querySelectorAll('.dropdown-panel.show').forEach(function(p){p.classList.remove('show');});dr.classList.add('show');ov.classList.add('show');dr.setAttribute('aria-hidden','false');document.body.style.overflow='hidden';}
    function closeD(){dr.classList.remove('show');ov.classList.remove('show');dr.setAttribute('aria-hidden','true');document.body.style.overflow='';}
    btn.addEventListener('click',openD);
    document.getElementById('ctrlClose').addEventListener('click',closeD);
    ov.addEventListener('click',closeD);
    document.addEventListener('keydown',function(e){if(e.key==='Escape') closeD();});
  }
  if(document.readyState!=='loading') init(); else document.addEventListener('DOMContentLoaded',init);
})();
</script>
<script>
(function(){
  function addSupport(){
    if(document.getElementById('supportBtn')) return;
    var link=document.createElement('a');
    link.id='supportBtn';link.className='support-btn';link.href='support_ticket.php';link.title='Support';
    link.setAttribute('aria-label','Support');
    link.innerHTML='<i class="fa-solid fa-headset"></i><span class="support-text">Support</span>';
    var phoneWrap=document.querySelector('.topbar .phone-wrap'),sec=document.querySelector('.topbar .topbar-right-secondary'),right=document.querySelector('.topbar .topbar-right'),bar=document.querySelector('.topbar');
    if(phoneWrap&&phoneWrap.parentNode){phoneWrap.parentNode.insertBefore(link,phoneWrap);}
    else if(sec){sec.insertBefore(link,sec.firstChild);}
    else if(right){right.insertBefore(link,right.firstChild);}
    else if(bar){bar.appendChild(link);}
  }
  if(document.readyState!=='loading') addSupport(); else document.addEventListener('DOMContentLoaded',addSupport);
})();
</script>
<script>
(function(){
  var s=document.getElementById('hkStar');if(!s) return;
  s.addEventListener('click',function(){
    var on=s.classList.toggle('on');
    s.firstChild.className=on?'fa-solid fa-star':'fa-regular fa-star';
  });
})();
</script>
<script>
(function(){
  function build(){
    var body=document.querySelector('#ctrlDrawer .ctrl-body');
    if(!body) return false;
    if(document.getElementById('ctrlHelp')) return true;
    var wrap=document.createElement('div');wrap.className='ctrl-help';wrap.id='ctrlHelp';
    var label=document.createElement('div');label.className='ctrl-label';label.textContent='Help & contact';
    var grid=document.createElement('div');grid.className='ctrl-quick';
    function tile(href,iconHtml,text,ext){
      var a=document.createElement('a');a.href=href;
      if(ext){a.target='_blank';a.rel='noopener';}
      a.innerHTML=iconHtml+' ';
      a.appendChild(document.createTextNode(text));
      var on=function(){a.classList.add('is-hover');},off=function(){a.classList.remove('is-hover');};
      a.addEventListener('mouseenter',on);a.addEventListener('mouseleave',off);
      a.addEventListener('pointerenter',on);a.addEventListener('pointerleave',off);
      a.addEventListener('touchstart',on,{passive:true});a.addEventListener('touchend',function(){setTimeout(off,250);});a.addEventListener('touchcancel',off);
      grid.appendChild(a);
    }
    tile('support_ticket.php','<i class="fa-solid fa-headset"></i>','Support',false);
    var ph=document.querySelector('.topbar .phone-text');
    var digits=ph?ph.textContent.replace(/[^+\d]/g,''):'';
    if(digits){tile('tel:'+digits,'<i class="fa-solid fa-phone"></i>','Call',false);}
    Array.prototype.forEach.call(document.querySelectorAll('#phonePanel a.dd-item'),function(a){
      var ic=a.querySelector('i');
      tile(a.getAttribute('href'),ic?ic.outerHTML:'',a.textContent.replace(/\s+/g,' ').trim(),a.getAttribute('target')==='_blank');
    });
    wrap.appendChild(label);wrap.appendChild(grid);body.appendChild(wrap);
    return true;
  }
  if(!build()){
    if(document.readyState==='loading'){document.addEventListener('DOMContentLoaded',build);}
    else{window.addEventListener('load',build);}
  }
})();
</script>
</body>
</html>