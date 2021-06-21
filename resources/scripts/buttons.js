document.getElementById("block_but_1").addEventListener("mouseover",()=>{
    s=0;
    id="but_1";
    elem=document.getElementById(id);
    count= 234;
    startChange();
    function startChange(){
        elem.innerHTML=s;
        s+=20;
        timeout=setTimeout(startChange,30);
        if(s>count){clearTimeout(timeout); s=0;elem.innerHTML=count;}
    }
})
document.getElementById("block_but_1").addEventListener("mouseout",()=>{
    clearTimeout(timeout); s=0;
    elem.innerHTML=count;
})
//
document.getElementById("block_but_2").addEventListener("mouseover",()=>{
    s=0;
    id="but_2";
    elem=document.getElementById(id);
    count= 1089;
    startChange();
    function startChange(){
        elem.innerHTML=s;
        s+=100;
        timeout=setTimeout(startChange,25);
        if(s>count){clearTimeout(timeout); s=0;elem.innerHTML=count;}
    }
})
document.getElementById("block_but_2").addEventListener("mouseout",()=>{
    clearTimeout(timeout); s=0;
    elem.innerHTML=count;
})
//
document.getElementById("block_but_3").addEventListener("mouseover",()=>{
    s=0;
    id="but_3";
    elem=document.getElementById(id);
    count= 206;
    startChange();
    function startChange(){
        elem.innerHTML=s;
        s+=20;
        timeout=setTimeout(startChange,30);
        if(s>count){clearTimeout(timeout); s=0;elem.innerHTML=count;}
    }
})
document.getElementById("block_but_3").addEventListener("mouseout",()=>{
    clearTimeout(timeout); s=0;
    elem.innerHTML=count;
})
//
document.getElementById("block_but_4").addEventListener("mouseover",()=>{
    s=0;
    id="but_4";
    elem=document.getElementById(id);
    count= 1200;
    startChange();
    function startChange(){
        elem.innerHTML=s;
        s+=100;
        timeout=setTimeout(startChange,25);
        if(s>count){clearTimeout(timeout); s=0;elem.innerHTML=count;}
    }
})
document.getElementById("block_but_4").addEventListener("mouseout",()=>{
    clearTimeout(timeout); s=0;
    elem.innerHTML=count;
})
