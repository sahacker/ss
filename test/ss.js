/* function test() {
}; */

function DrawBtn(kind, info) {
document.write('<div class="btndef '+kind+'"><a href="#" onclick="">'+info+'</a></div>');
};

function DrawDef1() {
document.write('<form class="compview" id="cv001"><div class="int1">');
DrawBtn("btn2", "Компания");
DrawBtn("btn3", "Бюджет");
document.write('</div></form>');
};
