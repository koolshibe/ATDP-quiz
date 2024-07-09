let form = $("form");
let buttons = $(".dot");
let count = 1;
let children = form.children("div");
children.eq(1).css("display","block");
buttons.eq(1).toggleClass("triggered");
$("#next").on("click", ()  => {
    count++;
    children.eq(count-1).css("display","none");
    children.eq(count).css("display","block");
    buttons.eq(count).toggleClass("triggered");
    buttons.eq(count-1).toggleClass("triggered");
});
$("#back").on("click", ()  => {
    count--;
    children.eq(count+1).css("display","none");
    children.eq(count).css("display","block");
    buttons.eq(count).toggleClass("triggered");
    buttons.eq(count+1).toggleClass("triggered");
});