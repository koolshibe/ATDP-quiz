let form = $("form");
let count = 1;
form.children("div").eq(1).css("display","block");
form.children("div").children("div").on("click", ()  => {
    count++;
    form.children("div").eq(count-1).css("display","none");
    form.children("div").eq(count).css("display","block");
});