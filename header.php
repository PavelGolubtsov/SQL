<style>
.header_container{
margin: 0 1em;
}
.header_container_flex{
display: flex;
justify-content: space-around;
}
.header_container_flex p{
margin: 0 1em;
}
.header_container_title{
width: 100%;
display: flex;
margin: auto;
justify-content: space-between;
}
.header_search_container{
flex: 1;
}
.search_input_text{
width: -webkit-fill-available;
height: 36px;
font-size: 12pt;
padding: 0 0 0 0.5em;
border: 0.1px rgb(128 255 126 / 50%) solid;
border-radius: 4px;
background-color: rgba(255, 255, 255, 0);
}
.search_input_submit{
z-index: -1;
position: absolute;
right: 1px;
top: 2px;
height: 34px;
width: 34px;
font-size: 12pt;
border: none;
padding: 1px;
background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cpath d='M0 0h16v16H0z'/%3E%3Cg stroke='%2367717A' stroke-linecap='round'%3E%3Cpath d='M14.5 14.5l-4-4M11.5 6.5a5 5 0 1 1-10.001-.001A5 5 0 0 1 11.5 6.5z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}
.header_container_title .header_act{
color: rgb(249 167 29);
border: 1px rgb(128 255 126 / 50%) solid;
border-bottom: none;
border-radius: 4px 4px 0 0;
background-color: rgb(218 255 208 / 50%);
}
.header_container_title .header_act:hover{
border: 1px grey solid;
border-bottom: none;
border-radius: 4px 4px 0 0;
}
.header_content_item{
width: 50%;
cursor: pointer;
}
.header_content_item:hover{
border: 1px rgba(200, 200, 200 ,0.5) solid;
border-bottom: none;
border-radius: 4px 4px 0 0;
color: rgb(249 167 29);
}
.header_content_item p{
margin: 0 1em;
font-size: 13pt;
}
.container_flex{
display: flex;
margin: 0 1em;
}
.search_container_relative{
position: relative;
}
.color_green{
background-color: rgb(0 255 0 / 50%);
cursor: pointer;
z-index: 0;
}
.header_container_search{
width: 100%;
}
@media (max-width: 991px){
.header_container_flex{
    flex-direction: column;
}
}
</style>
<header style="
    box-shadow: 0px 1px 4px 1px #a8a8a8, 0px -1px 4px 1px #c3c3c3;
    margin-top: 1px;">
    <div class="header_container">
        <div class="header_container_flex">
            <div style="flex: 1;">
                <p>Главная</p>
            </div>
            <div class="header_search_container" style="margin: 6px 0;">
                <div class="header_container_title">
                    <div id="search_vendor_code" class="header_content_item header_act">
                        <p>По артикулу</p>
                    </div>
                    <div id="search_name_part" class="header_content_item">
                        <p>По наименованию</p>
                    </div>
                </div>
                <div class="header_container_search">
                    <div id="content_search_vendor_code" class="">
                        <form action="">
                            <div class="search_container_relative">
                                <div>
                                    <input id="search_input_text1" class="search_input_text" type="text" placeholder="Введите артикул">
                                </div>
                                <div>
                                    <input id="search_input_submit1" class="search_input_submit" type="submit" value="" disabled>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="content_search_name_part" class="none">
                        <form action="">
                            <div class="search_container_relative">
                                <div>
                                    <input id="search_input_text2" class="search_input_text" type="text" placeholder="Введите наименование">
                                </div>
                                <div>
                                    <input id="search_input_submit2" class="search_input_submit" type="submit" value="" disabled>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
/* Кнопки поиска*/
/* Не активная кнопка поиска */
function removeAttributeSearchInput1(){
    if(search_input_text1.value){
        search_input_submit1.removeAttribute('disabled')
        search_input_submit1.classList.add('color_green')
    } else{
        search_input_submit1.setAttribute('disabled', true)
        search_input_submit1.classList.remove("color_green")
    }
}
function removeAttributeSearchInput2(){
    if(search_input_text2.value){
        search_input_submit2.removeAttribute('disabled')
        search_input_submit2.classList.add('color_green')
    } else{
        search_input_submit2.setAttribute('disabled', true)
        search_input_submit2.classList.remove("color_green")
    }
}
search_input_text1.addEventListener('input', removeAttributeSearchInput1)
search_input_text2.addEventListener('input', removeAttributeSearchInput2)
/* Конец не активная кнопка поиска */
/* Выбор типа поиска */
function clickVendorCode(){
    // проверить существование класса header_act
    if(search_vendor_code.classList.contains("header_act")){
    } else{
        search_name_part.classList.remove("header_act")
        search_vendor_code.classList.add("header_act")
        content_search_vendor_code.classList.remove("none")
        content_search_name_part.classList.add("none")
    }
}
function clickNamePart(){
    // проверить существование класса header_act
    if(search_name_part.classList.contains("header_act")){
    } else{
        search_vendor_code.classList.remove("header_act")
        search_name_part.classList.add("header_act")
        content_search_name_part.classList.remove("none")
        content_search_vendor_code.classList.add("none")
    }
}
search_vendor_code.addEventListener('click', clickVendorCode)
search_name_part.addEventListener('click', clickNamePart)
/* Конец выбора типа поиска */
/* Конец кнопок поиска*/
</script>
</header>
