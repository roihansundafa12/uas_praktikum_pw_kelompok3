<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ALGOSMOOTH — Born to Fresh</title>
<link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700&family=Dancing+Script:wght@700&family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
<style>
:root{
  --red:#E91E63;
  --pink:#FF6B9D;
  --cream:#FFF0F5;
  --dark:#2D1B2E;
}
*{margin:0;padding:0;box-sizing:border-box;}
body{
  font-family:'Nunito',sans-serif;
  background:var(--cream);
  color:var(--dark);
  overflow-x:hidden;
}
body::before{
  content:'';position:fixed;inset:0;z-index:-1;
  background:linear-gradient(135deg,#FFE0EC 0%,#FFF0F5 40%,#FFE8D6 70%,#FFF5F0 100%);
}

/* NAVBAR */
nav{
  display:flex;align-items:center;justify-content:space-between;
  padding:18px 70px;
  background:rgba(255,255,255,.7);backdrop-filter:blur(15px);
  position:sticky;top:0;z-index:100;
}
.logo{display:flex;align-items:center;gap:12px;}
.logo-icon{
  width:48px;height:48px;border-radius:14px;
  display:flex;align-items:center;justify-content:center;
  background:linear-gradient(135deg,var(--red),var(--pink));
  color:white;font-size:1.4rem;
  box-shadow:0 6px 18px rgba(233,30,99,.3);
}
.logo-name{font-family:'Passion One',sans-serif;font-size:1.6rem;letter-spacing:.05em;}
.logo-sub{display:block;font-size:.6rem;color:var(--pink);text-transform:uppercase;letter-spacing:.18em;font-weight:800;}
.nav-links{display:flex;gap:35px;list-style:none;}
.nav-links a{text-decoration:none;color:var(--dark);font-weight:800;transition:.3s;}
.nav-links a:hover,.nav-links a.active{color:var(--red);}
.nav-cta{
  text-decoration:none;color:white;
  background:linear-gradient(135deg,var(--red),var(--pink));
  padding:12px 28px;border-radius:50px;font-weight:800;
  box-shadow:0 8px 24px rgba(233,30,99,.3);transition:.3s;
}
.nav-cta:hover{transform:translateY(-3px);}

/* HERO */
.hero{
  min-height:92vh;display:grid;grid-template-columns:1fr 1fr;
  align-items:center;padding:40px 70px;gap:40px;position:relative;
}
.blob{position:absolute;border-radius:50%;pointer-events:none;}
.b1{width:450px;height:450px;background:radial-gradient(circle,rgba(255,107,157,.18) 0%,transparent 70%);top:-100px;right:-100px;}
.b2{width:260px;height:260px;background:radial-gradient(circle,rgba(255,195,80,.18) 0%,transparent 70%);bottom:0;left:0;}
.hero-text{z-index:2;}
.brand-big{
  font-family:'Passion One',sans-serif;
  font-size:clamp(4rem,8vw,7rem);line-height:1;color:white;
  -webkit-text-stroke:3px rgba(233,30,99,.35);
  text-shadow:4px 4px 0 rgba(233,30,99,.25),8px 8px 0 rgba(233,30,99,.12);
  margin-bottom:10px;
}
.script-tag{font-family:'Dancing Script',cursive;color:var(--red);font-size:clamp(2rem,4vw,3.5rem);margin-bottom:25px;}
.hero-desc{max-width:480px;line-height:1.8;color:rgba(45,27,46,.7);margin-bottom:30px;}
.hero-btns{display:flex;gap:16px;flex-wrap:wrap;}
.btn-main{
  background:linear-gradient(135deg,var(--red),var(--pink));
  color:white;padding:15px 34px;border-radius:50px;text-decoration:none;
  font-weight:900;box-shadow:0 10px 30px rgba(233,30,99,.3);transition:.3s;
}
.btn-main:hover{transform:translateY(-4px);}
.btn-ghost{
  background:white;color:var(--red);padding:14px 30px;border-radius:50px;
  text-decoration:none;border:2px solid rgba(233,30,99,.2);font-weight:800;transition:.3s;
}
.btn-ghost:hover{border-color:var(--red);}
.hero-visual{display:flex;justify-content:center;align-items:center;position:relative;z-index:2;}
.single-cup{display:flex;justify-content:center;align-items:center;position:relative;}
.single-cup::before{
  content:'';position:absolute;width:480px;height:380px;border-radius:50%;
  background:radial-gradient(ellipse,rgba(233,30,99,.14) 0%,rgba(255,107,157,.08) 50%,transparent 75%);
  top:55%;left:50%;transform:translate(-50%,-50%);pointer-events:none;z-index:0;
}
.single-cup img{
  width:560px;max-width:100%;object-fit:contain;
  filter:drop-shadow(0 25px 40px rgba(233,30,99,.20));
  animation:floatCup 4s ease-in-out infinite;position:relative;z-index:1;
}
@keyframes floatCup{0%,100%{transform:translateY(0)}50%{transform:translateY(-14px)}}

/* STATS */
.stats{
  display:flex;justify-content:space-around;flex-wrap:wrap;gap:20px;
  padding:24px 60px;background:linear-gradient(135deg,var(--red),var(--pink));
}
.st{text-align:center;color:white;}
.stn{font-family:'Passion One',sans-serif;font-size:2.3rem;}
.stl{font-size:.8rem;text-transform:uppercase;letter-spacing:.1em;}

/* SECTIONS */
.sec{padding:80px 70px;}
.shead{text-align:center;margin-bottom:50px;}
.seye{font-family:'Dancing Script',cursive;color:var(--red);font-size:1.7rem;}
.stit{font-family:'Passion One',sans-serif;font-size:clamp(2.5rem,5vw,4rem);}
.stit span{color:var(--red);}

/* MENU CARDS */
.mcard{
  background:white;border-radius:30px;padding:28px 20px;text-align:center;
  position:relative;box-shadow:0 10px 30px rgba(233,30,99,.08);
  transition:.35s;cursor:pointer;
}
.mcard:hover{transform:translateY(-10px);box-shadow:0 24px 60px rgba(233,30,99,.15);}
.cbadge{
  position:absolute;top:16px;right:16px;
  background:linear-gradient(135deg,var(--red),var(--pink));
  color:white;padding:5px 14px;border-radius:50px;font-size:.7rem;font-weight:800;
}
.cwrap img{width:140px;margin-bottom:15px;filter:drop-shadow(0 10px 18px rgba(233,30,99,.18));}
.cname{font-family:'Passion One',sans-serif;font-size:1.2rem;margin-bottom:6px;}
.cprice{color:var(--red);font-weight:900;font-size:1.1rem;margin-bottom:18px;}
.cbtn{
  width:100%;border:none;
  background:linear-gradient(135deg,var(--red),var(--pink));
  color:white;padding:12px;border-radius:50px;font-weight:800;
  cursor:pointer;transition:.3s;font-family:'Nunito',sans-serif;font-size:.9rem;
}
.cbtn:hover{transform:scale(.97);}

/* MENU GRIDS */
.mgrid-favorit{
  display:grid;grid-template-columns:repeat(3,1fr);gap:30px;
  max-width:860px;margin:0 auto;
}
.mgrid-all{
  display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:26px;
}
.mcard-list .cwrap img{width:120px;}
.mcard-list{padding:22px 16px;}
.sec-divider{margin-top:70px;}

/* ABOUT */
.about{
  padding:80px 70px;
  background:linear-gradient(180deg,#FFB8CC 0%,#FFD6E2 100%);
}
.about-in{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;}
.about-text h2{font-family:'Passion One',sans-serif;font-size:clamp(2.3rem,5vw,4rem);color:white;margin-bottom:20px;}
.about-text em{font-family:'Dancing Script',cursive;font-style:normal;}
.about-text p{color:rgba(255,255,255,.9);line-height:1.9;margin-bottom:18px;}
.about-cups img{width:330px;max-width:100%;filter:drop-shadow(0 18px 30px rgba(233,30,99,.22));}

/* FOOTER */
footer{
  background:#2D1B2E;padding:40px 70px;
  display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:20px;
}
.fbrand{font-family:'Passion One',sans-serif;font-size:1.8rem;color:var(--pink);}
.fsub{display:block;font-size:.6rem;letter-spacing:.18em;text-transform:uppercase;color:rgba(255,255,255,.4);}
footer p{color:rgba(255,255,255,.35);}
.flinks{display:flex;gap:20px;}
.flinks a{color:rgba(255,255,255,.45);text-decoration:none;transition:.3s;}
.flinks a:hover{color:var(--pink);}

/* ═══════════════════════════════
   PRODUCT DETAIL MODAL
═══════════════════════════════ */
#detail-overlay{
  display:none;position:fixed;inset:0;z-index:1100;
  background:rgba(45,27,46,.55);backdrop-filter:blur(6px);
  align-items:center;justify-content:center;
}
#detail-overlay.open{display:flex;}

.detail-panel{
  background:white;border-radius:28px;
  width:min(520px,94vw);max-height:90vh;
  overflow-y:auto;position:relative;
  box-shadow:0 30px 80px rgba(0,0,0,.3);
  animation:slideUp .35s ease;
}
@keyframes slideUp{from{transform:translateY(60px);opacity:0}to{transform:translateY(0);opacity:1}}

.dp-hero{
  position:relative;border-radius:28px 28px 0 0;
  padding:36px 20px 20px;
  display:flex;justify-content:center;align-items:flex-end;
  min-height:230px;overflow:hidden;
}
.dp-hero-img{
  width:190px;max-width:55%;object-fit:contain;
  filter:drop-shadow(0 20px 35px rgba(233,30,99,.3));
  position:relative;z-index:1;
  animation:floatCup 4s ease-in-out infinite;
}
.dp-badge-hero{
  position:absolute;top:18px;left:18px;
  background:linear-gradient(135deg,var(--red),var(--pink));
  color:white;font-weight:900;font-size:.72rem;
  padding:5px 14px;border-radius:50px;z-index:2;
}
.dp-close{
  position:absolute;top:14px;right:14px;
  background:white;border:none;cursor:pointer;
  width:34px;height:34px;border-radius:50%;
  font-size:1rem;display:flex;align-items:center;justify-content:center;
  box-shadow:0 2px 10px rgba(0,0,0,.15);color:#555;transition:.2s;z-index:2;
}
.dp-close:hover{background:#FFE0EC;color:var(--red);}

.dp-body{padding:20px 24px 28px;}
.dp-rating{display:flex;align-items:center;gap:6px;font-size:.83rem;color:#888;margin-bottom:8px;}
.dp-stars{color:#FFB300;}
.dp-name{font-family:'Passion One',sans-serif;font-size:1.75rem;color:#2D1B2E;line-height:1.1;margin-bottom:3px;}
.dp-sub{color:#aaa;font-size:.82rem;margin-bottom:14px;}

.dp-price-row{display:flex;align-items:center;margin-bottom:20px;gap:12px;}
.dp-price{font-family:'Passion One',sans-serif;font-size:2rem;color:var(--red);}
.dp-qty{
  display:flex;align-items:center;gap:10px;margin-left:auto;
  background:#FFF0F5;border-radius:50px;padding:6px 16px;
}
.dpq-btn{
  width:28px;height:28px;border-radius:50%;
  border:2px solid var(--red);background:white;color:var(--red);
  font-size:1.1rem;font-weight:900;cursor:pointer;
  display:flex;align-items:center;justify-content:center;transition:.2s;
}
.dpq-btn:hover{background:var(--red);color:white;}
.dpq-num{font-weight:900;font-size:1rem;min-width:22px;text-align:center;color:#2D1B2E;}

.dp-sec-title{
  font-family:'Passion One',sans-serif;font-size:1.05rem;color:#2D1B2E;
  margin:16px 0 10px;display:flex;align-items:center;gap:8px;
}
.dp-sec-title::after{
  content:'';flex:1;height:2px;
  background:linear-gradient(90deg,#FFD0E8,transparent);border-radius:2px;
}

.ing-grid{display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-bottom:4px;}
.ing-item{
  display:flex;align-items:center;gap:8px;
  background:#FFF8FC;border-radius:12px;
  padding:9px 12px;font-size:.8rem;color:#444;
  border:1px solid #FFE8F4;
}
.ing-icon{font-size:1.1rem;flex-shrink:0;}
.ing-full{grid-column:1/-1;}

.top-list{list-style:none;padding:0;margin:0;}
.top-list li{
  display:flex;align-items:center;gap:10px;
  padding:9px 14px;border-radius:12px;
  font-size:.83rem;color:#444;margin-bottom:6px;
  background:#FFF5F8;border:1px solid #FFE8F4;
}
.top-list li::before{content:'✦';color:var(--red);font-size:.7rem;flex-shrink:0;}

.fresh-badge{
  display:flex;align-items:center;gap:10px;
  background:#F0FFF4;border-radius:12px;
  padding:10px 14px;margin:14px 0 6px;
  border:1px solid #C8E6C9;font-size:.8rem;color:#2E7D32;font-weight:700;
}

.dp-actions{display:flex;gap:12px;margin-top:18px;}
.dp-add{
  flex:1;padding:16px;border:none;border-radius:50px;
  background:linear-gradient(135deg,var(--red),var(--pink));
  color:white;font-weight:900;font-size:1rem;cursor:pointer;
  box-shadow:0 8px 24px rgba(233,30,99,.25);transition:.3s;
  font-family:'Nunito',sans-serif;
}
.dp-add:hover{transform:translateY(-2px);}
.dp-wish{
  width:52px;height:52px;border-radius:50%;
  border:2px solid #FFD0E8;background:white;
  color:var(--red);font-size:1.3rem;cursor:pointer;transition:.25s;
  display:flex;align-items:center;justify-content:center;flex-shrink:0;
}
.dp-wish:hover{background:#FFE0EC;}

/* ═══════════════════════════════
   CART SIDEBAR + CHECKOUT FLOW
═══════════════════════════════ */
#cart-fab{
  position:fixed;bottom:30px;right:30px;z-index:999;
  width:64px;height:64px;border-radius:50%;
  background:linear-gradient(135deg,var(--red),var(--pink));
  border:none;cursor:pointer;box-shadow:0 8px 24px rgba(233,30,99,.4);
  display:flex;align-items:center;justify-content:center;
  font-size:1.6rem;transition:.3s;
}
#cart-fab:hover{transform:scale(1.1);}
#cart-count{
  position:absolute;top:-4px;right:-4px;
  background:var(--red);color:white;
  width:22px;height:22px;border-radius:50%;
  font-size:.7rem;font-weight:900;
  display:flex;align-items:center;justify-content:center;
  border:2px solid white;
}
#checkout-overlay{
  display:none;position:fixed;inset:0;z-index:1000;
  background:rgba(45,27,46,.45);backdrop-filter:blur(4px);
}
#checkout-overlay.open{display:flex;align-items:center;justify-content:center;}
.co-panel{
  background:white;border-radius:28px;
  width:min(520px,92vw);max-height:88vh;
  overflow-y:auto;padding:0;
  box-shadow:0 30px 80px rgba(0,0,0,.25);
  animation:slideUp .35s ease;
}
.co-header{
  display:flex;align-items:center;gap:12px;
  padding:22px 28px 16px;border-bottom:1px solid #FFE0EC;
  position:sticky;top:0;background:white;z-index:2;
  border-radius:28px 28px 0 0;
}
.co-back{background:none;border:none;cursor:pointer;font-size:1.4rem;color:var(--red);padding:4px 8px;border-radius:8px;transition:.2s;}
.co-back:hover{background:#FFE0EC;}
.co-title{font-family:'Passion One',sans-serif;font-size:1.5rem;color:#2D1B2E;flex:1;}
.co-body{padding:24px 28px;}
.steps{display:flex;justify-content:center;gap:8px;padding:12px 0 0;}
.step-dot{width:8px;height:8px;border-radius:50%;background:#FFD0E8;transition:.3s;}
.step-dot.active{background:var(--red);width:24px;border-radius:4px;}

.cart-item{display:flex;align-items:center;gap:14px;padding:14px 0;border-bottom:1px solid #FFE8F0;}
.cart-item:last-child{border-bottom:none;}
.ci-img{width:64px;height:64px;object-fit:contain;border-radius:14px;background:#FFF0F5;flex-shrink:0;padding:4px;}
.ci-info{flex:1;}
.ci-name{font-weight:800;font-size:.95rem;color:#2D1B2E;margin-bottom:4px;}
.ci-price{color:var(--red);font-weight:900;font-size:.9rem;}
.ci-qty{display:flex;align-items:center;gap:10px;margin-top:8px;}
.qty-btn{width:28px;height:28px;border-radius:50%;border:2px solid var(--red);background:white;color:var(--red);font-size:1rem;font-weight:900;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:.2s;}
.qty-btn:hover{background:var(--red);color:white;}
.qty-num{font-weight:900;font-size:.95rem;min-width:18px;text-align:center;}
.ci-del{background:none;border:none;cursor:pointer;color:#ccc;font-size:1.2rem;transition:.2s;padding:4px;}
.ci-del:hover{color:var(--red);}

.co-summary{background:#FFF0F5;border-radius:16px;padding:16px 20px;margin-top:16px;}
.sum-row{display:flex;justify-content:space-between;font-size:.9rem;margin-bottom:8px;color:#555;}
.sum-total{display:flex;justify-content:space-between;font-weight:900;font-size:1.05rem;color:#2D1B2E;margin-top:8px;padding-top:8px;border-top:2px solid #FFD0E8;}
.empty-cart{text-align:center;padding:40px 20px;color:#aaa;}
.empty-cart .big{font-size:3rem;margin-bottom:12px;}
.co-btn{
  width:100%;padding:16px;border:none;border-radius:50px;
  background:linear-gradient(135deg,var(--red),var(--pink));
  color:white;font-weight:900;font-size:1rem;cursor:pointer;
  margin-top:18px;box-shadow:0 8px 24px rgba(233,30,99,.25);
  transition:.3s;font-family:'Nunito',sans-serif;
}
.co-btn:hover{transform:translateY(-2px);}
.co-btn.ghost{background:white;color:var(--red);border:2px solid rgba(233,30,99,.3);box-shadow:none;margin-top:10px;}
.co-btn.ghost:hover{border-color:var(--red);}
.co-btn.green{background:linear-gradient(135deg,#43A047,#66BB6A);box-shadow:0 8px 24px rgba(67,160,71,.25);}
.detail-row{display:flex;justify-content:space-between;padding:10px 0;border-bottom:1px solid #FFE8F0;font-size:.9rem;}
.detail-row:last-child{border-bottom:none;}
.detail-label{color:#888;font-weight:600;}
.detail-val{font-weight:800;color:#2D1B2E;text-align:right;}
.pay-section{margin-bottom:18px;}
.pay-label{font-weight:900;font-size:.85rem;text-transform:uppercase;letter-spacing:.08em;color:#888;margin-bottom:10px;}
.pay-card{display:flex;align-items:center;gap:14px;padding:14px 18px;border-radius:16px;border:2px solid #FFE0EC;cursor:pointer;margin-bottom:10px;transition:.25s;}
.pay-card:hover{border-color:var(--red);background:#FFF5F8;}
.pay-card.selected{border-color:var(--red);background:#FFF0F5;}
.pay-icon{font-size:1.8rem;width:40px;text-align:center;}
.pay-info{flex:1;}
.pay-name{font-weight:900;color:#2D1B2E;}
.pay-sub{font-size:.8rem;color:#888;margin-top:2px;}
.pay-radio{width:20px;height:20px;border-radius:50%;border:2px solid #ddd;transition:.25s;display:flex;align-items:center;justify-content:center;}
.pay-card.selected .pay-radio{border-color:var(--red);background:var(--red);}
.pay-card.selected .pay-radio::after{content:'';width:8px;height:8px;border-radius:50%;background:white;}
.success-screen{text-align:center;padding:10px 0 20px;}
.success-icon{width:90px;height:90px;border-radius:50%;background:linear-gradient(135deg,#43A047,#66BB6A);display:flex;align-items:center;justify-content:center;font-size:2.5rem;margin:0 auto 20px;box-shadow:0 12px 30px rgba(67,160,71,.3);animation:popIn .5s cubic-bezier(.175,.885,.32,1.275);}
@keyframes popIn{from{transform:scale(0);opacity:0}to{transform:scale(1);opacity:1}}
.success-title{font-family:'Passion One',sans-serif;font-size:1.8rem;color:#2D1B2E;margin-bottom:8px;}
.success-sub{color:#888;line-height:1.6;font-size:.9rem;margin-bottom:20px;}
.order-code{background:#FFF0F5;border-radius:12px;padding:12px 20px;font-weight:900;color:var(--red);letter-spacing:.08em;font-size:1rem;display:inline-block;margin-bottom:20px;}
.reko-title{font-family:'Passion One',sans-serif;font-size:1.2rem;color:#2D1B2E;margin:20px 0 12px;text-align:left;}
.reko-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px;}
.reko-card{background:#FFF5F8;border-radius:16px;padding:12px;text-align:center;cursor:pointer;border:2px solid transparent;transition:.25s;}
.reko-card:hover{border-color:var(--red);}
.reko-card img{width:70px;height:70px;object-fit:contain;margin-bottom:6px;}
.reko-name{font-weight:800;font-size:.8rem;color:#2D1B2E;margin-bottom:4px;}
.reko-price{color:var(--red);font-weight:900;font-size:.85rem;}
.reko-add{display:block;margin:8px auto 0;background:linear-gradient(135deg,var(--red),var(--pink));color:white;border:none;border-radius:50px;padding:5px 14px;font-size:.75rem;font-weight:800;cursor:pointer;transition:.2s;font-family:'Nunito',sans-serif;}
.voucher-row{display:flex;gap:10px;margin-bottom:16px;}
.voucher-input{flex:1;padding:12px 16px;border-radius:12px;border:2px solid #FFE0EC;font-family:'Nunito',sans-serif;font-size:.9rem;outline:none;transition:.2s;}
.voucher-input:focus{border-color:var(--red);}
.voucher-btn{padding:12px 20px;border-radius:12px;background:linear-gradient(135deg,var(--red),var(--pink));color:white;border:none;font-weight:800;cursor:pointer;font-family:'Nunito',sans-serif;font-size:.85rem;}

/* RESPONSIVE */
@media(max-width:900px){
  nav{padding:16px 24px;}.nav-links{display:none;}
  .hero{grid-template-columns:1fr;text-align:center;padding:30px 24px;}
  .hero-visual{order:-1;}
  .hero-desc{margin:auto auto 30px;}
  .hero-btns{justify-content:center;}
  .single-cup img{width:340px;}
  .sec{padding:60px 24px;}
  .about{padding:60px 24px;}
  .about-in{grid-template-columns:1fr;}
  footer{flex-direction:column;text-align:center;padding:30px 24px;}
  .mgrid-favorit{grid-template-columns:1fr;max-width:320px;}
  .mgrid-all{grid-template-columns:repeat(2,1fr);}
}
@media(max-width:500px){
  .mgrid-all{grid-template-columns:1fr;}
}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav>
  <div class="logo">
    <div class="logo-icon">🥤</div>
    <div>
      <div class="logo-name">ALGOSMOOTH</div>
      <span class="logo-sub">born to fresh</span>
    </div>
  </div>
  <ul class="nav-links">
    <li><a href="#" class="active">Home</a></li>
    <li><a href="#menu">Menu</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
  <a href="#menu" class="nav-cta">Order Now 🍓</a>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="blob b1"></div>
  <div class="blob b2"></div>
  <div class="hero-text">
    <div class="brand-big">ALGOSMOOTH</div>
    <div class="script-tag">Order Now!</div>
    <p class="hero-desc">Rasakan kesegaran buah asli dalam setiap tegukan. Dibuat dari bahan berkualitas premium dengan rasa creamy dan tampilan aesthetic yang bikin mood naik.</p>
    <div class="hero-btns">
      <a href="#menu" class="btn-main">ORDER SEKARANG 🥤</a>
      <a href="#about" class="btn-ghost">Pelajari Lebih →</a>
    </div>
  </div>
  <div class="hero-visual">
    <div class="single-cup">
      <!-- Tambahkan ../ di depan images -->
      <img src="../images/strawberry.png" alt="Algosmooth Hero">
    </div>
  </div>
</section>

<!-- STATS -->
<div class="stats">
  <div class="st"><div class="stn">50+</div><div class="stl">Menu Pilihan</div></div>
  <div class="st"><div class="stn">10K+</div><div class="stl">Pelanggan Puas</div></div>
  <div class="st"><div class="stn">100%</div><div class="stl">Buah Asli</div></div>
  <div class="st"><div class="stn">5 ⭐</div><div class="stl">Rating Terbaik</div></div>
</div>

<!-- MENU -->
<section class="sec" id="menu">

  <!-- MENU FAVORIT -->
  <div class="shead">
    <div class="seye">Pilihan Terpopuler</div>
    <h2 class="stit">MENU <span>FAVORIT</span></h2>
  </div>
  <div class="mgrid-favorit">
    
    <div class="mcard" onclick="openDetail(0,'favorit',event)">
      <div class="cbadge">Popular</div>
        <div class="cwrap">
          <a href="https://link-tujuan-kamu.com">
            <!-- Diubah ke folder lokal images -->
            <img src="../images/mango.png" alt="Mango Smoothie">
          </a>
        </div>
      <div class="cname">Mango Smoothie</div>
      <div class="cprice">Rp 15.000</div>
      <button class="cbtn" onclick="addCart(this)">+ Tambah ke Keranjang</button>
    </div>
    <div class="mcard" onclick="openDetail(1,'favorit',event)">
      <div class="cbadge">Best Seller</div>
        <div class="cwrap">
          <a href="halaman-strawberry.html">
            <!-- Diubah ke lokal dengan ../ agar mengarah ke folder images di luar folder api -->
            <img src="../images/strawberry.png" alt="Strawberry Smoothie">
          </a>
        </div>      
      <div class="cname">Strawberry Smoothie</div>
      <div class="cprice">Rp 15.000</div>
      <button class="cbtn" onclick="addCart(this)">+ Tambah ke Keranjang</button>
    </div>
    <div class="mcard" onclick="openDetail(2,'favorit',event)">
      <div class="cbadge">Premium</div>
        <div class="cwrap">
          <a href="halaman-dragon-fruit.html">
            <!-- Diubah ke lokal menuju folder images di luar folder api -->
            <img src="../images/dragon-fruit.png" alt="Dragon Fruit Smoothie">
          </a>
        </div>     
      <div class="cname">Dragon Fruit Smoothie</div>
      <div class="cprice">Rp 20.000</div>
      <button class="cbtn" onclick="addCart(this)">+ Tambah ke Keranjang</button>
    </div>
  </div>

  <!-- DAFTAR MENU -->
  <div class="shead sec-divider">
    <div class="seye">Semua Pilihan Rasa</div>
    <h2 class="stit">DAFTAR <span>MENU</span></h2>
  </div>
  <div class="mgrid-all">
    
    <div class="mcard" onclick="openDetail(0,'all',event)">
      <div class="cbadge">Popular</div>
        <div class="cwrap">
          <a href="https://link-tujuan-kamu.com">
            <!-- Diubah ke folder lokal images -->
            <img src="../images/mango.png" alt="Mango Smoothie">
          </a>
        </div>     
      <div class="cname">Mango Smoothie</div>
      <div class="cprice">Rp 15.000</div>
      <button class="cbtn" onclick="addCart(this)">+ Tambah ke Keranjang</button>
    </div>
    <div class="mcard" onclick="openDetail(1,'all',event)">
      <div class="cbadge">Best Seller</div>
        <div class="cwrap">
          <a href="https://link-tujuan-kamu.com">
            <!-- Diubah ke folder lokal images -->
            <img src="../images/strawberry.png" alt="Strawberry Smoothie">
          </a>
        </div>
      <div class="cname">Strawberry Smoothie</div>
      <div class="cprice">Rp 15.000</div>
      <button class="cbtn" onclick="addCart(this)">+ Tambah ke Keranjang</button>
    </div>
    <div class="mcard" onclick="openDetail(2,'all',event)">
      <div class="cbadge">Premium</div>
        <div class="cwrap">
          <a href="halaman-dragon-fruit.html">
            <!-- Diubah ke lokal menuju folder images di luar folder api -->
            <img src="../images/dragon-fruit.png" alt="Dragon Fruit Smoothie">
          </a>
        </div>      
      <div class="cname">Dragon Fruit Smoothie</div>
      <div class="cprice">Rp 20.000</div>
      <button class="cbtn" onclick="addCart(this)">+ Tambah ke Keranjang</button>
    </div>
    <div class="mcard" onclick="openDetail(3,'all',event)">
      <div class="cbadge">Healthy</div>
        <div class="cwrap">
          <a href="halaman-Avocado.html">
            <!-- Diubah ke lokal menuju folder images di luar folder api -->
          <a href="halaman-Avocado.html">
            <img src="../images/Avocado.png" alt="Avocado Smoothie">
          </a>
        </div>  
      <div class="cname">Avocado Smoothie</div>
      <div class="cprice">Rp 12.000</div>
      <button class="cbtn" onclick="addCart(this)">+ Tambah ke Keranjang</button>
    </div>
    <div class="mcard" onclick="openDetail(4,'all',event)">
      <div class="cbadge">Fresh</div>
        <div class="cwrap">
          <a href="halaman-melon.html">
            <!-- Diubah ke lokal dengan ../ agar mengarah ke folder images di luar folder api -->
            <img src="../images/melon.png" alt="Melon Smoothie">
          </a>
        </div>      
      <div class="cname">Melon Smoothie</div>
      <div class="cprice">Rp 12.000</div>
      <button class="cbtn" onclick="addCart(this)">+ Tambah ke Keranjang</button>
    </div>
    <div class="mcard" onclick="openDetail(5,'all',event)">
      <div class="cbadge">Tropical</div>
        <div class="cwrap">
          <a href="halaman-Avocado.html">
            <!-- Diubah ke lokal menuju folder images di luar folder api -->
          <a href="halaman-nanas.html">
            <img src="../images/nanas.png" alt="Nanas Smoothie">
          </a>
        </div>       
      <div class="cname">Nanas Smoothie</div>
      <div class="cprice">Rp 12.000</div>
      <button class="cbtn" onclick="addCart(this)">+ Tambah ke Keranjang</button>
    </div>
    <div class="mcard" onclick="openDetail(6,'all',event)">
      <div class="cbadge">Special</div>
        <div class="cwrap">
          <a href="halaman-Avocado.html">
            <!-- Diubah ke lokal menuju folder images di luar folder api -->
          <a href="halaman-sirsak.html">
            <img src="../images/sirsak.png" alt="Sirsak Smoothie">
          </a>
        </div>        
      <div class="cname">Sirsak Smoothie</div>
      <div class="cprice">Rp 12.000</div>
      <button class="cbtn" onclick="addCart(this)">+ Tambah ke Keranjang</button>
    </div>
  </div>

</section>

<!-- ABOUT -->
<section class="about" id="about">
  <div class="about-in">
    <div class="about-text">
      <h2>Dibuat dengan <em>Cinta</em> & Buah Segar</h2>
      <p>ALGOSMOOTH menghadirkan smoothie premium dengan perpaduan buah segar dan cream lembut yang memberikan sensasi fresh di setiap tegukan.</p>
      <p>Tanpa pengawet, tanpa pemanis buatan, hanya rasa alami terbaik untuk menemani harimu.</p>
      <a href="#menu" class="btn-main">PESAN SEKARANG 🍓</a>
      <div class="cwrap" style="display: inline-block; vertical-align: middle;">
        <a href="halaman-about.html">
          <img src="../images/strawberry.png" alt="About Smoothies">
        </a>
      </div>
      
</section>

<!-- FOOTER -->
<footer>
  <div class="fbrand">ALGOSMOOTH<span class="fsub">born to fresh</span></div>
  <p>© 2026 ALGOSMOOTH. All rights reserved.</p>
  <div class="flinks">
    <a href="#"></a>
    <a href="https://www.instagram.com/algosmooth_official?igsh=MXFsZ25hbmFxbmpjNw==" target="_blank">
    📸 Instagram
</a>
    <a href="https://www.tiktok.com/@algosmooth?_r=1&_t=ZS-98Bct9fH1Ua" target="_blank">
    🎵 TikTok: @Algosmooth_official
</a>
    <a href="https://wa.me/qr/JQJHW6AHUX4UI1" target="_blank">
    💬 WhatsApp
</a>
  </div>
</footer>

<!-- CART FAB -->
<button id="cart-fab" onclick="openCheckout()">🛒<div id="cart-count">0</div></button>

<!-- CHECKOUT OVERLAY -->
<div id="checkout-overlay" onclick="overlayClick(event)">
  <div class="co-panel" id="co-panel">
    <div class="steps" id="co-steps">
      <div class="step-dot active" id="dot-0"></div>
      <div class="step-dot" id="dot-1"></div>
      <div class="step-dot" id="dot-2"></div>
      <div class="step-dot" id="dot-3"></div>
    </div>
    <!-- STEP 0: Cart -->
    <div id="step-cart">
      <div class="co-header">
        <button class="co-back" onclick="closeCheckout()">✕</button>
        <div class="co-title">Keranjang 🛒</div>
      </div>
      <div class="co-body">
        <div id="cart-items-list"></div>
        <div id="cart-empty" class="empty-cart" style="display:none">
          <div class="big">🛒</div>
          <p style="font-weight:800">Keranjang masih kosong</p>
          <p style="font-size:.85rem;color:#bbb;margin-top:4px">Yuk tambah smoothie favoritmu!</p>
        </div>
        <div id="cart-summary" class="co-summary">
          <div class="sum-row"><span>Subtotal</span><span id="sub-total">Rp 0</span></div>
          <div class="sum-row"><span>Ongkir</span><span>Rp 2.000</span></div>
          <div class="sum-total"><span>Total</span><span id="grand-total">Rp 2.000</span></div>
        </div>
        <button class="co-btn" id="btn-checkout" onclick="goStep(1)">Lanjut ke Konfirmasi →</button>
        <button class="co-btn ghost" onclick="closeCheckout()">Lanjut Belanja</button>
      </div>
    </div>
    <!-- STEP 1: Confirm -->
    <div id="step-confirm" style="display:none">
      <div class="co-header">
        <button class="co-back" onclick="goStep(0)">←</button>
        <div class="co-title">Konfirmasi Pesanan</div>
      </div>
      <div class="co-body">
        <p style="color:#888;font-size:.85rem;margin-bottom:16px">Periksa rincian pesananmu</p>
        <div id="confirm-items"></div>
        <div class="co-summary" style="margin-top:12px">
          <div class="detail-row"><span class="detail-label">Item</span><span class="detail-val" id="cf-items">-</span></div>
          <div class="detail-row"><span class="detail-label">Subtotal</span><span class="detail-val" id="cf-sub">-</span></div>
          <div class="detail-row"><span class="detail-label">Ongkir</span><span class="detail-val">Rp 2.000</span></div>
          <div class="sum-total"><span>Total Bayar</span><span id="cf-total" style="color:var(--red)">-</span></div>
        </div>
        <div style="margin-top:16px">
          <p style="font-weight:800;margin-bottom:8px;color:#2D1B2E">Punya Voucher?</p>
          <div class="voucher-row">
            <input class="voucher-input" placeholder="Masukkan kode voucher..." id="voucher-in">
            <button class="voucher-btn" onclick="applyVoucher()">Pakai</button>
          </div>
        </div>
        <button class="co-btn" onclick="goStep(2)">Pilih Pembayaran →</button>
        <button class="co-btn ghost" onclick="goStep(0)">← Kembali</button>
      </div>
    </div>
    <!-- STEP 2: Payment -->
    <div id="step-payment" style="display:none">
      <div class="co-header">
        <button class="co-back" onclick="goStep(1)">←</button>
        <div class="co-title">Metode Pembayaran</div>
      </div>
      <div class="co-body">
        <p style="color:#888;font-size:.85rem;margin-bottom:18px">Pilih cara pembayaranmu</p>
        <div class="pay-section">
          <div class="pay-label">Tunai</div>
          <div class="pay-card" onclick="selectPay(this,'cash')">
            <div class="pay-icon">💵</div>
            <div class="pay-info"><div class="pay-name">Cash / Tunai</div><div class="pay-sub">Bayar langsung saat terima pesanan</div></div>
            <div class="pay-radio"></div>
          </div>
        </div>
        <div class="pay-section">
          <div class="pay-label">E-Wallet</div>
          <div class="pay-card" onclick="selectPay(this,'dana')">
            <div class="pay-icon">💙</div>
            <div class="pay-info"><div class="pay-name">DANA</div><div class="pay-sub">Transfer ke DANA 0812-XXXX-XXXX</div></div>
            <div class="pay-radio"></div>
          </div>
          <div class="pay-card" onclick="selectPay(this,'gopay')">
            <div class="pay-icon">💚</div>
            <div class="pay-info"><div class="pay-name">GoPay</div><div class="pay-sub">Transfer ke GoPay 0812-XXXX-XXXX</div></div>
            <div class="pay-radio"></div>
          </div>
        </div>
        <div class="co-summary">
          <div class="sum-total"><span>Total Bayar</span><span id="pay-total" style="color:var(--red)">-</span></div>
        </div>
        <button class="co-btn green" onclick="placeOrder()">✓ Pesan Sekarang</button>
        <button class="co-btn ghost" onclick="goStep(1)">← Kembali</button>
      </div>
    </div>
    <!-- STEP 3: Success -->
    <div id="step-success" style="display:none">
      <div class="co-body" style="padding-top:32px">
        <div class="success-screen">
          <div class="success-icon">✓</div>
          <div class="success-title">Pesanan Berhasil! 🎉</div>
          <p class="success-sub">Pesananmu sedang diproses.<br>Estimasi siap: <strong>10–15 menit</strong></p>
          <div class="order-code" id="order-code-display">#ALGO-0000</div>
          <div style="background:#FFF0F5;border-radius:16px;padding:14px 18px;text-align:left">
            <div class="detail-row"><span class="detail-label">Metode Bayar</span><span class="detail-val" id="sc-pay">-</span></div>
            <div class="detail-row"><span class="detail-label">Total</span><span class="detail-val" id="sc-total" style="color:var(--red)">-</span></div>
          </div>
        </div>
        <div class="reko-title">🍹 Mungkin Kamu Suka Juga</div>
        <div class="reko-grid" id="reko-grid"></div>
        <button class="co-btn" onclick="closeCheckout();resetCart()">Kembali ke Menu</button>
      </div>
    </div>
  </div>
</div>

<!-- PRODUCT DETAIL MODAL -->
<div id="detail-overlay" onclick="detailOverlayClick(event)">
  <div class="detail-panel" id="detail-panel">
    <div class="dp-hero" id="dp-hero">
      <span class="dp-badge-hero" id="dp-badge">Popular</span>
      <button class="dp-close" onclick="closeDetail()">✕</button>
      <img class="dp-hero-img" id="dp-img" src="" alt="">
    </div>
    <div class="dp-body">
      <div class="dp-rating"><span class="dp-stars">★★★★★</span><span id="dp-rating-txt">4.8</span></div>
      <div class="dp-name" id="dp-name">Smoothie</div>
      <div class="dp-sub" id="dp-sub">300ml · Tanpa Pengawet</div>
      <div class="dp-price-row">
        <div class="dp-price" id="dp-price">Rp 15.000</div>
        <div class="dp-qty">
          <button class="dpq-btn" onclick="dpQty(-1)">−</button>
          <span class="dpq-num" id="dp-qty-num">1</span>
          <button class="dpq-btn" onclick="dpQty(1)">+</button>
        </div>
      </div>
      <div class="dp-sec-title">🥤 Bahan Smoothies</div>
      <div class="ing-grid" id="dp-ing-grid"></div>
      <div class="dp-sec-title">✨ Bahan Topping & Gelas</div>
      <ul class="top-list" id="dp-top-list"></ul>
      <div class="fresh-badge">🌿 Dibuat segar setiap hari — tanpa pengawet, tanpa pemanis buatan</div>
      <div class="dp-actions">
        <button class="dp-wish" id="dp-wish" onclick="toggleWish(this)">🤍</button>
        <button class="dp-add" onclick="dpAddToCart()">🛒 Tambah ke Keranjang</button>
      </div>
    </div>
  </div>
</div>

<script>
// ── Menu Data ──────────────────────────────────────────────────────
const menuData = [
  {name:'Mango Smoothie', price:'15.000', badge:'Popular', img:'../images/mango.png'},
  {name:'Strawberry Smoothie', price:'15.000', badge:'Best Seller', img:'../images/strawberry.png'},
  {name:'Dragon Fruit Smoothie', price:'20.000', badge:'Premium', img:'../images/Dragon-fruit.png'},
  {name:'Avocado Smoothie', price:'12.000', badge:'Healthy', img:'../images/Avocado.png'},
  {name:'Melon Smoothie', price:'12.000', badge:'Fresh', img:'../images/melon.png'},
  {name:'Nanas Smoothie', price:'12.000', badge:'Tropical', img:'../images/nanas.png'},
  {name:'Sirsak Smoothie', price:'12.000', badge:'Special', img:'../images/sirsak.png'}
];

// ── Product Details ────────────────────────────────────────────────
const productDetails = {
  'Mango Smoothie':{
    rating:'4.8 · 200+ terjual',sub:'300ml · Tanpa Pengawet · Buah Asli',
    heroBg:'linear-gradient(160deg,#FFE8C0 0%,#FFF9E8 100%)',
    ingredients:[
      {icon:'🥭',text:'100g daging buah mangga segar'},
      {icon:'🥛',text:'30ml Susu Kental Manis putih'},
      {icon:'🍬',text:'20ml sirup gula'},
      {icon:'🥛',text:'30ml Susu UHT Full Cream'},
      {icon:'🧊',text:'200g es batu'},
      {icon:'💧',text:'50ml air matang'},
    ],
    topping:['Whipped cream instan','20g Keju Cheddar parut','Potongan dadu buah mangga 🥭']
  },
  'Strawberry Smoothie':{
    rating:'4.9 · 350+ terjual',sub:'300ml · Tanpa Pengawet · Buah Asli',
    heroBg:'linear-gradient(160deg,#FFE0EC 0%,#FFF0F5 100%)',
    ingredients:[
      {icon:'🍓',text:'100g buah stroberi segar'},
      {icon:'🥛',text:'30ml Susu Kental Manis putih'},
      {icon:'🍬',text:'20ml sirup gula'},
      {icon:'🥛',text:'30ml Susu UHT Full Cream'},
      {icon:'🧊',text:'200g es batu'},
      {icon:'💧',text:'50ml air matang'},
    ],
    topping:['Whipped cream instan','20g Keju Cheddar parut','Potongan buah stroberi segar 🍓']
  },
  'Dragon Fruit Smoothie':{
    rating:'4.7 · 180+ terjual',sub:'300ml · Tanpa Pengawet · Buah Asli',
    heroBg:'linear-gradient(160deg,#FFD6F0 0%,#FFF0FA 100%)',
    ingredients:[
      {icon:'🐉',text:'100g daging buah naga merah'},
      {icon:'🥛',text:'30ml Susu Kental Manis putih'},
      {icon:'🍬',text:'20ml sirup gula'},
      {icon:'🥛',text:'30ml Susu UHT Full Cream'},
      {icon:'🧊',text:'200g es batu'},
      {icon:'💧',text:'50ml air matang'},
    ],
    topping:['Whipped cream instan','20g Keju Cheddar parut','Potongan buah naga merah 🐉']
  },
  'Avocado Smoothie':{
    rating:'4.8 · 150+ terjual',sub:'300ml · Tanpa Pengawet · Buah Asli',
    heroBg:'linear-gradient(160deg,#DCEDC8 0%,#F1F8E9 100%)',
    ingredients:[
      {icon:'🥑',text:'100g daging buah alpukat matang'},
      {icon:'🥛',text:'30ml Susu Kental Manis putih'},
      {icon:'🍬',text:'20ml sirup gula'},
      {icon:'🥛',text:'30ml Susu UHT Full Cream'},
      {icon:'🧊',text:'200g es batu'},
      {icon:'💧',text:'50ml air matang'},
    ],
    topping:['Whipped cream instan','20g Keju Cheddar parut','Potongan kecil alpukat segar 🥑']
  },
  'Melon Smoothie':{
    rating:'4.6 · 130+ terjual',sub:'300ml · Tanpa Pengawet · Buah Asli',
    heroBg:'linear-gradient(160deg,#C8F5D0 0%,#F0FFF4 100%)',
    ingredients:[
      {icon:'🍈',text:'100g daging buah melon segar'},
      {icon:'🥛',text:'30ml Susu Kental Manis putih'},
      {icon:'🍬',text:'20ml sirup gula'},
      {icon:'🥛',text:'30ml Susu UHT Full Cream'},
      {icon:'🧊',text:'200g es batu'},
      {icon:'💧',text:'50ml air matang'},
    ],
    topping:['Whipped cream instan','20g Keju Cheddar parut','Potongan kecil melon segar 🍈']
  },
  'Nanas Smoothie':{
    rating:'4.7 · 120+ terjual',sub:'300ml · Tanpa Pengawet · Buah Asli',
    heroBg:'linear-gradient(160deg,#FFF9C4 0%,#FFFDE7 100%)',
    ingredients:[
      {icon:'🍍',text:'100g daging buah nanas segar'},
      {icon:'🥛',text:'30ml Susu Kental Manis putih'},
      {icon:'🍬',text:'20ml sirup gula'},
      {icon:'🥛',text:'30ml Susu UHT Full Cream'},
      {icon:'🧊',text:'200g es batu'},
      {icon:'💧',text:'50ml air matang'},
    ],
    topping:['Whipped cream instan','20g Keju Cheddar parut','Potongan kecil nanas segar 🍍']
  },
  'Sirsak Smoothie':{
    rating:'4.8 · 100+ terjual',sub:'300ml · Tanpa Pengawet · Buah Asli',
    heroBg:'linear-gradient(160deg,#E8F5E9 0%,#F9FBE7 100%)',
    ingredients:[
      {icon:'🌿',text:'100g daging buah sirsak segar'},
      {icon:'🥛',text:'30ml Susu Kental Manis putih'},
      {icon:'🍬',text:'20ml sirup gula'},
      {icon:'🥛',text:'30ml Susu UHT Full Cream'},
      {icon:'🧊',text:'200g es batu'},
      {icon:'💧',text:'50ml air matang'},
    ],
    topping:['Whipped cream instan','20g Keju Cheddar parut','Potongan kecil sirsak segar 🌿']
  },
};

// ── Cart State ─────────────────────────────────────────────────────
let cart=[], payMethod='', orderTotal=0, dpQtyVal=1, dpCurrentName='', dpCurrentPrice=0, dpCurrentImg='';

function fmt(n){ return 'Rp '+n.toLocaleString('id-ID'); }
function randCode(){ return '#ALGO-'+Math.floor(1000+Math.random()*9000); }

// ── Add to cart from card button ───────────────────────────────────
function addCart(btn){
  const card=btn.closest('.mcard');
  const name=card.querySelector('.cname').textContent.trim();
  const price=parseInt(card.querySelector('.cprice').textContent.replace(/[^0-9]/g,''));
  const img=card.querySelector('.cwrap img').src;
  const ex=cart.find(i=>i.name===name);
  if(ex)ex.qty++; else cart.push({name,price,qty:1,img});
  updateCartCount();
  const old=btn.innerHTML;
  btn.innerHTML='✓ Ditambahkan!';
  btn.style.background='linear-gradient(135deg,#43A047,#66BB6A)';
  setTimeout(()=>{btn.innerHTML=old;btn.style.background='';},2000);
}
function updateCartCount(){
  document.getElementById('cart-count').textContent=cart.reduce((s,i)=>s+i.qty,0);
}
function calcSubtotal(){ return cart.reduce((s,i)=>s+(i.price*i.qty),0); }

// ── Checkout ───────────────────────────────────────────────────────
function openCheckout(){renderCart();document.getElementById('checkout-overlay').classList.add('open');document.body.style.overflow='hidden';}
function closeCheckout(){document.getElementById('checkout-overlay').classList.remove('open');document.body.style.overflow='';}
function overlayClick(e){if(e.target.id==='checkout-overlay')closeCheckout();}
function resetCart(){cart=[];updateCartCount();goStep(0);}
function goStep(n){
  ['step-cart','step-confirm','step-payment','step-success'].forEach((id,i)=>{
    document.getElementById(id).style.display=i===n?'block':'none';
  });
  for(let i=0;i<4;i++) document.getElementById('dot-'+i).classList.toggle('active',i<=n);
  if(n===1)renderConfirm(); if(n===2)renderPayment(); if(n===3)renderSuccess();
  document.getElementById('co-panel').scrollTop=0;
}
function renderCart(){
  const list=document.getElementById('cart-items-list');
  const empty=document.getElementById('cart-empty');
  const summary=document.getElementById('cart-summary');
  const btn=document.getElementById('btn-checkout');
  if(cart.length===0){list.innerHTML='';empty.style.display='block';summary.style.display='none';btn.disabled=true;btn.style.opacity='.4';return;}
  empty.style.display='none';summary.style.display='block';btn.disabled=false;btn.style.opacity='1';
  list.innerHTML=cart.map((item,idx)=>`
    <div class="cart-item">
      <img class="ci-img" src="${item.img}" alt="${item.name}">
      <div class="ci-info">
        <div class="ci-name">${item.name}</div>
        <div class="ci-price">${fmt(item.price)}</div>
        <div class="ci-qty">
          <button class="qty-btn" onclick="changeQty(${idx},-1)">−</button>
          <span class="qty-num">${item.qty}</span>
          <button class="qty-btn" onclick="changeQty(${idx},1)">+</button>
        </div>
      </div>
      <button class="ci-del" onclick="removeItem(${idx})">🗑</button>
    </div>`).join('');
  const sub=calcSubtotal();
  document.getElementById('sub-total').textContent=fmt(sub);
  document.getElementById('grand-total').textContent=fmt(sub+2000);
}
function changeQty(idx,d){cart[idx].qty+=d;if(cart[idx].qty<=0)cart.splice(idx,1);updateCartCount();renderCart();}
function removeItem(idx){cart.splice(idx,1);updateCartCount();renderCart();}
function renderConfirm(){
  const sub=calcSubtotal(); orderTotal=sub+2000;
  document.getElementById('cf-items').textContent=cart.reduce((s,i)=>s+i.qty,0)+' item';
  document.getElementById('cf-sub').textContent=fmt(sub);
  document.getElementById('cf-total').textContent=fmt(orderTotal);
  document.getElementById('confirm-items').innerHTML=cart.map(i=>`
    <div class="cart-item">
      <img class="ci-img" src="${i.img}" alt="${i.name}">
      <div class="ci-info"><div class="ci-name">${i.name} × ${i.qty}</div><div class="ci-price">${fmt(i.price*i.qty)}</div></div>
    </div>`).join('');
}
function applyVoucher(){
  const code=document.getElementById('voucher-in').value.trim().toUpperCase();
  if(code==='ALGO10'){const disc=Math.round(orderTotal*.1);orderTotal-=disc;document.getElementById('cf-total').textContent=fmt(orderTotal)+' (diskon 10%)';alert('Voucher berhasil! Hemat '+fmt(disc));}
  else alert('Kode voucher tidak valid.');
}
function renderPayment(){ document.getElementById('pay-total').textContent=fmt(orderTotal); }
function selectPay(el,method){ document.querySelectorAll('.pay-card').forEach(c=>c.classList.remove('selected'));el.classList.add('selected');payMethod=method; }
function placeOrder(){ if(!payMethod){alert('Pilih metode pembayaran dulu 😊');return;} goStep(3); }
function renderSuccess(){
  const labels={cash:'Cash / Tunai',dana:'DANA',gopay:'GoPay'};
  document.getElementById('sc-pay').textContent=labels[payMethod]||payMethod;
  document.getElementById('sc-total').textContent=fmt(orderTotal);
  document.getElementById('order-code-display').textContent=randCode();
  renderReko();
}
function renderReko(){
  const cartNames=cart.map(i=>i.name);
  const picks=menuData.filter(m=>!cartNames.includes(m.name)).sort(()=>Math.random()-.5).slice(0,4);
  const grid=document.getElementById('reko-grid');
  if(!picks.length){grid.innerHTML='<p style="color:#aaa;text-align:center;grid-column:1/-1">Semua menu sudah di keranjang 🎉</p>';return;}
  grid.innerHTML=picks.map(m=>`
    <div class="reko-card">
      <img src="${m.img}" alt="${m.name}">
      <div class="reko-name">${m.name}</div>
      <div class="reko-price">Rp ${m.price}</div>
      <button class="reko-add" onclick="addFromReko('${m.name}',${parseInt(m.price.replace('.',''))})">+ Tambah</button>
    </div>`).join('');
}
function addFromReko(name,price){
  const m=menuData.find(i=>i.name===name);
  const ex=cart.find(i=>i.name===name);
  if(ex)ex.qty++; else cart.push({name,price,qty:1,img:m?m.img:''});
  updateCartCount();renderReko();
}

// ── Product Detail ─────────────────────────────────────────────────
function openDetail(idx, source, event){
  if(event&&event.target.classList.contains('cbtn'))return;
  const item = source==='favorit' ? menuData.slice(0,3)[idx] : menuData[idx];
  if(!item)return;
  dpCurrentName=item.name; dpCurrentPrice=parseInt(item.price.replace('.',''));
  dpCurrentImg=item.img; dpQtyVal=1;

  document.getElementById('dp-name').textContent=item.name;
  document.getElementById('dp-price').textContent='Rp '+item.price;
  document.getElementById('dp-badge').textContent=item.badge||'';
  document.getElementById('dp-img').src=item.img;
  document.getElementById('dp-img').alt=item.name;
  document.getElementById('dp-qty-num').textContent='1';
  document.getElementById('dp-wish').textContent='🤍';

  const det=productDetails[item.name];
  document.getElementById('dp-rating-txt').textContent=det?det.rating:'4.8';
  document.getElementById('dp-sub').textContent=det?det.sub:'300ml · Buah Segar';

  const hero=document.getElementById('dp-hero');
  hero.style.background=det?det.heroBg:'linear-gradient(160deg,#FFE0EC,#FFF5F0)';

  const ing=det?det.ingredients:[];
  document.getElementById('dp-ing-grid').innerHTML=ing.map((x,i)=>
    `<div class="ing-item${i===0?' ing-full':''}"><span class="ing-icon">${x.icon}</span><span>${x.text}</span></div>`
  ).join('');

  const top=det?det.topping:[];
  document.getElementById('dp-top-list').innerHTML=top.map(t=>`<li>${t}</li>`).join('');

  document.getElementById('detail-overlay').classList.add('open');
  document.body.style.overflow='hidden';
}
function closeDetail(){ document.getElementById('detail-overlay').classList.remove('open');document.body.style.overflow=''; }
function detailOverlayClick(e){ if(e.target.id==='detail-overlay')closeDetail(); }
function dpQty(d){ dpQtyVal=Math.max(1,dpQtyVal+d);document.getElementById('dp-qty-num').textContent=dpQtyVal; }
function dpAddToCart(){
  for(let q=0;q<dpQtyVal;q++){
    const ex=cart.find(i=>i.name===dpCurrentName);
    if(ex)ex.qty++; else cart.push({name:dpCurrentName,price:dpCurrentPrice,qty:1,img:dpCurrentImg});
  }
  updateCartCount();
  const btn=document.querySelector('.dp-add');
  btn.innerHTML='✓ Ditambahkan!';
  btn.style.background='linear-gradient(135deg,#43A047,#66BB6A)';
  setTimeout(()=>{btn.innerHTML='🛒 Tambah ke Keranjang';btn.style.background='';closeDetail();},1500);
}
function toggleWish(btn){ btn.textContent=btn.textContent==='🤍'?'❤️':'🤍'; }
</script>
</body>
</html>