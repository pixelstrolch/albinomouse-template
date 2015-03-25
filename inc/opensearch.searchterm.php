<?php 
$httpContentType = 'text/xml';
echo '<' . '?xml version="1.0" encoding="utf-8" ?' . ">\n";
?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/">
	<ShortName><?php echo $_SERVER['SERVER_NAME'] ?> - par terme</ShortName>
	<Description>Recherche dans le Shaarli <?php echo $_SERVER['SERVER_NAME'] ?></Description>
	// <Url type="text/html" method="get" template="https://<?php echo $_SERVER['SERVER_NAME'] ?>/?searchterm={searchTerms}"/>
	<InputEncoding>UTF-8</InputEncoding>
	<Developer>Alexis J / https://liens.effingo.be</Developer>
    <Image width="16" height="16">data:image/x-icon;base64,AAABAAYAHx4QAAEABADAAgAAZgAAAB8eEAABAAQAwAIAACYDAAAQEAAAAQAIAGgFAADmBQAAHx4A
AAEACABgCAAATgsAABAQAAABACAAaAQAAK4TAAAfHgAAAQAgACgPAAAWGAAAKAAAAB8AAAA8AAAA
AQAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGZmZgBwcHAAe3t7AIiIiACWlpYApqamAL6+vgC/
v78A1NTUANXV1QDp6ekA7+/vAAAAAAAAAAAAAAAAAAAAAADMzMzMzMzMzMzMzMzMzMzAzMzMzMzM
zMzMzMzMzMzMwMzMzMzMzMzMzMzMzMzMzMDMzMzMzMzMzMzMzMzMzMzAzMzMzMzMzMzMzMzMzMzM
wMzMzMzMzMzMzMzMzMzMzMDMzMzMzMzMzMzMzMzMzMzAzMzMzMzMzMzMzMzMzMzMwMzMzMzMzMzM
zMzMzMzMzMDMzMzMzMzMzMzMzMzMzMzAzMzMzMzMzMzMzMzMzMzMwMzMzMzMzMzMzMzMzMzMzMDM
zMzMzMzMzMzMzMzMzMzAzMzMzMzMzMzMzMzMzMzMwMzMzMzMzMzMzMzMzMzMzMDMzLvMzLm8zMzM
zMzMzMzAzMEAXMYACMzMzMzMzMzMwMyAAQVwAAbMzMzMzMzMzMDMwVcgBXEYzMzMzMzMzMzAzGUJ
cEdRfMzMzMzMzMzMwMURBZeVARXMzMzMzMzMzMCRF3nMl3UhjMzMzMzMzMzAkSR3nJd3IozMzMzM
zMzMwMciIjlCIjbMzMzMzMzMzMDMiHNJQljMzMzMzMzMzMzAzMzFOTOMzMzMzMzMzMzMwMzMxjMz
zMzMzMzMzMzMzMDMzMxDOczMzMzMzMzMzMzAzMzMyKzMzMzMzMzMzMzMwMzMzMzMzMzMzMzMzMzM
zMD////+/////v////7////+/////v////7////+/////v////7////+/////v////7////+////
/v////7zx//+4YP//sAD//7gA//+wAf//oAD//4DAf/+AQH//oAD//7AD//++B///vg///78P//+
/n///v////4oAAAAHwAAADwAAAABAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAWFhYAGJiYgBs
bGwAdHR0AHZ2dgCPj48AqKioAMjIyADi4uIA5+fnAOrq6gD19fUA////AAAAAAAAAAAAAAAAAN3d
3d3d3d3d3d3d2I3d3dDd3d2Jd3eN3d3diXZnjd3Q3d3YcgABZo3d2HEAAGjd0N3d1xAAAAF72nYA
AAAZ3dDd3dcAAAAAF4dQAAAAF93Q3d3WEAZyABZ1AAIQABfd0N3d1xAHyRABIAFscAAn3dDd3dhQ
BspxAAAWzHABaN3Q3d3YYRHNlhEQbMchEp3d0N3drHIRXNkRFsxxECed3dDdp3MRERepYWnHIRFn
yd3Q2nUAAAAGnZecchAAACV90NlREiMzJZ3YiVIjIiERadDXIRN3d3mN3dd3d3ZiETnQ1yIlfMzM
jd3ZnMzMcyI50NkiI1ZmZ2e9iXd3dlIiWdDZUiIiIjI1fYYzMzIiI3jQ3ZYyIiIiJJh1IiIiJFmd
0N3Zx2VVQzN6lTM0RXfN3dDd3dqczMNEmHVEXMyN3d3Q3d3d3d2UNHqVM1zd3d3d0N3d3d3dxER5
dUR43d3d3dDd3d3d3ZZEbGREfd3d3d3Q3d3d3d2XREVERM3d3d3d0N3d3d3d11REREad3d3d3dDd
3d3d3dp0RERc3d3d3d3Q3d3d3d3dl2VWmN3d3d3d0N3d3d3d3d2Zyd3d3d3d3dDd3d3d3d3d3d3d
3d3d3d3Q3d3d3d3d3d3d3d3d3d3d0P///n78B/Ae+AHgDvgAgA74AAAO+AAADvgAAA74AAAO+BAA
HvAIAB7AAAAOgAQABoAGAAKAB4ACgAeAAoABAAKAAQACwAAABuAAAB74AAB+/8AD/v/AA/7/wAf+
/8AH/v/gB/7/4A/+//AP/v/8P/7////+/////igAAAAQAAAAIAAAAAEACAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAABVVVUAW1tbAGFhYQBjY2MAZGRkAGVlZQBmZmYAZ2dnAGhoaABpaWkAbGxsAG5u
bgBvb28AcXFxAHJycgBzc3MAdHR0AHV1dQB2dnYAeHh4AHl5eQB7e3sAfX19AH5+fgB/f38AgICA
AISEhACFhYUAiIiIAImJiQCKiooAjo6OAJCQkACRkZEAlJSUAJaWlgCXl5cAmZmZAJubmwCcnJwA
np6eAKKiogCmpqYAqqqqAKysrACtra0Arq6uALGxsQCysrIAtbW1ALa2tgC3t7cAurq6AL29vQC+
vr4Av7+/AMDAwADCwsIAw8PDAMTExADGxsYAx8fHAMvLywDMzMwAzc3NAM/PzwDQ0NAA1NTUANXV
1QDW1tYA19fXANjY2ADZ2dkA29vbANzc3ADg4OAA4uLiAObm5gAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAATk5OTk5OTk5OTk5OTk5OTk5OTk5MS05OTk5LTEtOTk5OTk4fAAEmTk42BQARQ05O
Tk5AAhUXAjAwBRUCBTtOTk5OThUnQRoLAyY6DRlDTk5OTjYeET84ByZKKBAzTk5OTioWCQIqSDpN
IwQFGC9OTkcIEjQ9SE5OTDc3KxQSQE5IBg4pMTdETklCQy4TF0ZOTjIXEg8KIEsjCAwRHjlOTk5O
RUI8IR9LJA4vQE5OTk5OTk5OTiwbRR0WRU5OTk5OTk5OTk41GCUPIk5OTk5OTk5OTk5OTi0cHz5O
Tk5OTk5OTk5OTk5OSEpOTk5OTk5OTk5OTk5OTk5OTk5OTk5OTv//AADzxwAA4YMAAMADAADgAwAA
wAcAAIADAAADAQAAAQEAAIADAADADwAA+B8AAPg/AAD8PwAA/n8AAP//AAAoAAAAHwAAADwAAAAB
AAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAVVVVAFZWVgBXV1cAWFhYAFlZWQBaWloAXFxcAF1d
XQBeXl4AX19fAGBgYABhYWEAYmJiAGNjYwBkZGQAZWVlAGdnZwBoaGgAaWlpAGpqagBra2sAbGxs
AG1tbQBubm4Ab29vAHBwcABxcXEAcnJyAHNzcwB0dHQAdnZ2AHd3dwB5eXkAenp6AHt7ewB8fHwA
fn5+AH9/fwCAgIAAgYGBAISEhACFhYUAiIiIAImJiQCOjo4AkpKSAJOTkwCUlJQAl5eXAJmZmQCd
nZ0Anp6eAJ+fnwCioqIAo6OjAKWlpQCoqKgArKysAK6urgCysrIAs7OzALS0tAC1tbUAurq6ALu7
uwC8vLwAwMDAAMHBwQDFxcUAxsbGAMjIyADKysoAy8vLAMzMzADNzc0Azs7OAM/PzwDQ0NAA0dHR
ANLS0gDT09MA1NTUANXV1QDW1tYA19fXANjY2ADZ2dkA2traANvb2wDc3NwA3d3dAN/f3wDg4OAA
4eHhAOLi4gDj4+MA5OTkAObm5gDo6OgA7OzsAO7u7gDy8vIA9/f3APj4+AD5+fkA+vr6APv7+wD8
/PwA/f39AP7+/gD///8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAG9vb29vb29vb29vb29vb29vb29vb29vW1tvb29vb28A
b29vb29vW1hPTUdPWm9vb29vb29bXUU8PE1Xb29vbwBvb29vb1lGKAgACBUvQ1lvb29vWj8oAAAB
DTxbb29vAG9vb29vUCMCAAAAAAMdP2hvYlA1CAIAAAAAI1Bvb28Ab29vb28/BwEBAwUBAQMjTFxQ
KAcBAQEBAQEVRm9vbwBvb29vbz8KAgI1RSECAgo4VSsHAgUjFQICAhVFb29vAG9vb29vTx0EBE1r
XSEEBBUhCgQKO11FBAQEIVBvb28Ab29vb29KLwUFOGthTgwFBQUFDD1lbEsFBQw1WW9vbwBvb29v
b1s9DAcUY29iOAcHBwc7ZW1dFAcHJFhvb29vAG9vb29faU4fBgY0aW9dHwYJOGRuTg0GBh9LX29v
b28Ab29eXT4rEQgHBwhYXl89FDRja0kUBwcNNFVhYm9vbwBvYU4mCQkJCQkJCTBib1xGXmdLHgkJ
CQkJCREuTW9vAG9kJgsLDRgeHh4gJmJvb19hXC4YGBsYGAsLCwszXW8Ab1gMDAwmQUlHSU9eXm9v
b29TR0FCRkE+MxYMDCZdbwBvTw4ODi5eamprbmteb29vb19lYmtsbmpUJg4OJl1vAG9eEQ8PHS0y
Nzk5Pj5IaG9gUk1ITElBOSwUDw8zXW8Ab2EyDw8PDw8QERQdHSxKb1Y3IyMjIx0UDw8PJU9fbwBv
b2E3GxERERERERERJVpeUywRERERERERGjJUWW9vAG9vb2JhRzkyLSwaEhIlUWFTLRISFBolMkFe
Xm9vb28Ab29vb29gXWtna2QcEyVNYVMtExMtampmYW9vb29vbwBvb29vb29vb29vYyUVJU1fUiwV
FTZrb29vb29vb29vAG9vb29vb29vb29jKRYgRF1RKhYWQFlvb29vb29vb28Ab29vb29vb29vb2Ux
FyA2ZDwgFxdPb29vb29vb29vbwBvb29vb29vb29vazwaGiIsIhoaJ2Fvb29vb29vb29vAG9vb29v
b29vb29vXCcZGRkZGRk8XW9vb29vb29vb28Ab29vb29vb29vb29cTyIaGhoaLF1vb29vb29vb29v
bwBvb29vb29vb29vb29ZTzo0NDpdXm9vb29vb29vb29vAG9vb29vb29vb29vb29vXF1dXG9vb29v
b29vb29vb28Ab29vb29vb29vb29vb29vb29vb29vb29vb29vb29vbwBvb29vb29vb29vb29vb29v
b29vb29vb29vb29vb29vAP///n78B/Ae+AHgDvgAgA74AAAO+AAADvgAAA74AAAO+BAAHvAIAB7A
AAAOgAQABoAGAAKAB4ACgAeAAoABAAKAAQACwAAABuAAAB74AAB+/8AD/v/AA/7/wAf+/8AH/v/g
B/7/4A/+//AP/v/8P/7////+/////igAAAAQAAAAIAAAAAEAIAAAAAAAAAAAAAAAAAAAAAAAAAAA
AAAAAAD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A
////AP///wD///8A////AP7+/gHr6+sWwcHBZbm5uaS7u7uSzMzMRvT09Av8/PwD4ODgJLy8vIO7
u7u8ubm5ktzc3Cr9/f0C////AP///wD29vYJu7u7do2NjftbW1v/ZWVl/6CgoPS+vr5sy8vLS7Ky
stV1dXX/VVVV/3t7e/6wsLCK7+/vEf///wD///8A7+/vEbKysqRhYWH/dXV1/H19ff1gYGD/q6ur
6aurq+llZWX/dHR0/mFhYf9lZWX/pqamp+Xl5R3///8A////APX19Qq4uLh7e3t7/5qamvnIyMjg
f39/9W5ubv9jY2P/mpqa+8HBwfVxcXH/f39/+7GxsYTw8PAQ////AP///wDNzc1Jt7e3sIqKiv91
dXX9v7+/yri4uOFmZmb9m5ub/dvb2/abm5v4dHR0/7Ozs+3CwsJu9PT0C////wDOzs5HoaGh3Hp6
evhpaWn/YWFh/6GhofDGxsaou7u73+Tk5O6VlZX9ZGRk/2VlZf98fHz5pKSk2sfHx1H6+voFxcXF
qWhoaP92dnb/urq6/sbGxvjS0tLT0NDQROXl5Rzb29vKvr6++r29vfaqqqr8eXl5/3Z2dv+ysrKT
8fHxDsfHx6xmZmb/cnJy/6Kiov+1tbX/v7+//8/Pz+DU1NQ90tLSycvLy+HR0dHura2t/Xh4eP9+
fn7/t7e3ifPz8wzS0tI/r6+v5nl5efV1dXX8c3Nz/mxsbP+QkJD/zs7On5aWlv9oaGj/b29v/3R0
dPyEhITys7Ozy9XV1TX+/v4B////ANfX1zXBwcGFubm5q7i4uMyMjIz0jo6O/9LS0q2Xl5f/cnJy
/qqqqum3t7etwMDAdOHh4SP9/f0C////AP///wD///8A////AP///wDQ0NBCmpqa0YWFhf/Ozs7T
iYmJ/3p6evm9vb2b/f39Av///wD///8A////AP///wD///8A////AP///wD///8A39/fJ6enp7x/
f3//mZmZ/nNzc/+NjY3wxcXFZP///wD///8A////AP///wD///8A////AP///wD///8A////APf3
9wi9vb1zpqam64iIiP+Ojo7/u7u7wObm5hz///8A////AP///wD///8A////AP///wD///8A////
AP///wD///8A7OzsFMfHx1C3t7eHurq6fdra2iz+/v4B////AP///wD///8A////AP///wD///8A
////AP///wD///8A////AP///wD7+/sE8/PzDPX19Qr///8A////AP///wD///8A////AP///wD/
//8A//8AAPPHAADhgwAAwAMAAOADAADABwAAgAMAAAMBAAABAQAAgAMAAMAPAAD4HwAA+D8AAPw/
AAD+/wAA//8AACgAAAAfAAAAPAAAAAEAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD///8A////
AP///wD///8A////AP39/QDu7u4A/v7+Afr6+gX5+fkG+vr6Bf7+/gHi4uIA8vLyAP///wD///8A
////AP///wD///8A/v7+AO3t7QD+/v4B9/f3CPT09Av09PQL+fn5Bv7+/gH5+fkA////AP///wD/
//8A////AP///wD///8A////APz8/AD9/f0C7u7uEtra2jDHx8dXwsLCY8bGxl3Z2dk54uLiIvLy
8g3h4eEA/f39AP///wD///8A9fX1AP7+/gHt7e0T19fXN8nJyXK+vr6TwcHBjsvLy2Lg4OAm+fn5
Bvr6+gD///8A////AP///wD///8A////AP///wD8/PwD39/fKMrKyofZ2dnj09PT/s/Pz//Q0ND/
2dnZ/NbW1szJycl04eHhI/39/QL///8A6+vrAPX19QrX19c1zs7OkOLi4vHGxsb/srKy/7W1tf/Q
0ND7z8/PvtLS0kD6+voF////AP///wD///8A////AP///wD9/f0A5OTkIMnJyZzGxsb3h4eH/15e
Xv9VVVX/WFhY/2xsbP+Wlpb/y8vL9MzMzKTc3Nws2dnZAOvr6xfKyspi1dXVzr6+vvyBgYH/VlZW
/1VVVf9VVVX/aGho/7W1tf3Ly8uk4+PjIf///wD///8A////AP///wD///8A/f39AszMzFTR0dHp
fHx8/1ZWVv9VVVX/VVVV/1VVVf9VVVX/V1dX/3Nzc/+/v7/zycnJldnZ2TXLy8t+0dHR5JycnP5h
YWH/VlZW/1VVVf9VVVX/VVVV/1VVVf99fX3/z8/P3s3NzUn///8A////AP///wD///8A////APb2
9gnGxsZ0urq6/mBgYP9WVlb/VlZW/1hYWP9bW1v/VlZW/1ZWVv9YWFj/f39//87OzuLc3Ny9ysrK
5omJif9cXFz/VlZW/1ZWVv9WVlb/VlZW/1ZWVv9WVlb/bGxs/8jIyPnFxcVc////AP///wD///8A
////AP///wD39/cIycnJcrq6uv9hYWH/V1dX/1dXV/+jo6P/w8PD/4CAgP9XV1f/V1dX/2BgYP+p
qan92dnZ/YuLi/9dXV3/V1dX/1lZWf9/f3//bGxs/1dXV/9XV1f/V1dX/2xsbP/IyMj5xcXFXP//
/wD///8A////AP///wD///8A/v7+AcrKylfMzMzudHR0/1lZWf9ZWVn/0NDQ//z8/NXg4OD+eHh4
/1lZWf9ZWVn/bW1t/3p6ev9gYGD/WVlZ/2BgYP+ysrL/4+Pj+sbGxv9ZWVn/WVlZ/1lZWf9+fn7/
zc3N383NzUn///8A////AP///wD///8A////AP///wDY2Ngzz8/PwJGRkf9aWlr/Wlpa/6ysrP/w
8PDT3t7emtLS0v9jY2P/Wlpa/1paWv9bW1v/Wlpa/19fX/+1tbX/9PT05v///+DNzc3/Wlpa/1pa
Wv9fX1//o6Oj/8vLy6vh4eEk////AP///wD///8A////APT09ADT09MA8vLyDsjIyIyxsbH/ZWVl
/1tbW/9ra2v/7u7u/NLS0mrs7OzWpqam/1tbW/9bW1v/W1tb/15eXv+wsLD/9PT08////+jf39/8
bW1t/1tbW/9bW1v/gYGB/9fX1+fKyspg/f39Av///wD///8A////AOnp6QD09PQL09PTR9zc3K37
+/vt0dHR/3l5ef9cXFz/XFxc/56env/6+vro1NTUYeHh4f10dHT/XFxc/2BgYP+np6f/8vLy9f39
/fDR0dH9ZWVl/1xcXP9cXFz/dHR0/8/Pz/7a2tqr5eXlIvz8/APq6uoA/v7+APv7+wDp6ekZ09PT
nObm5vu3t7f/h4eH/2hoaP9eXl7/XV1d/11dXf9fX1//3Nzc+9HR0Y/W1taztLS0/2pqav+goKD+
7e3t9vv7+/LMzMz8bGxs/11dXf9dXV3/ZmZm/6Ghof/Y2Nj/5+fn/+fn5+LLy8t46urqGP7+/gH7
+/sEzs7OmdLS0v98fHz/X19f/19fX/9fX1//X19f/19fX/9fX1//X19f/5WVlf/s7Oza0NDQX9zc
3ODIyMjz5eXl7fj4+O/Ozs77dXV1/19fX/9fX1//X19f/19fX/9fX1//X19f/2lpaf+Wlpb/3Nzc
+crKynny8vIO4eHhJ/Dw8PuAgID/YWFh/2FhYf9kZGT/cHBw/3d3d/92dnb/dnZ2/3l5ef+Hh4f/
5+fn6NbW1kjPz89UzMzMiNbW1qLe3t7mkJCQ/3BwcP9xcXH/cnJy/29vb/9ra2v/Y2Nj/2FhYf9h
YWH/YWFh/5qamv/b29vR4ODgJMvLy2bb29v/YmJi/2JiYv9iYmL/gICA/7q6uv/MzMz/y8vL/cvL
y/jS0tLx4+Pj2s7Ozp7q6uoZ39/fAP///wDQ0NBN2dnZ1MPDw/6+vr76wcHB98TExPS/v7/5tbW1
/pqamv9vb2//YmJi/2JiYv+AgID/4eHh9Nra2i3Dw8N20tLS/2RkZP9kZGT/ZGRk/5OTk//j4+P/
+vr6//7+/v3////3////7v39/dLPz8+ax8fHZt/f3yff398A29vbM9ra2qvx8fHf7Ozs2fz8/N3/
///e////8/z8/P7W1tb/e3t7/2RkZP9kZGT/goKC/+Li4vHb29sszc3NVuLi4v9oaGj/ZWVl/2Vl
Zf9zc3P/kpKS/5+fn/+kpKT/qamp/6+vr/+1tbX/vLy8/s7OzurJycmR39/fLMjIyIHQ0NDXyMjI
5sTExOXNzc3ry8vL8L29vfyrq6v/jo6O/2tra/9lZWX/ZWVl/5qamv/e3t7Q4ODgJOnp6Rns7Ozs
mJiY/2ZmZv9mZmb/ZmZm/2ZmZv9mZmb/Z2dn/2lpaf9sbGz/b29v/3Nzc/+SkpL/0dHRzc7OznPP
z8/HoqKi/35+fv9+fn7/e3t7/3l5ef90dHT/a2tr/2ZmZv9mZmb/ZmZm/4CAgP/Pz8/8ysrKg/Dw
8BD+/v4By8vLb+bm5vimpqb/dHR0/2hoaP9oaGj/aGho/2hoaP9oaGj/aGho/2hoaP9oaGj/f39/
/9DQ0NrW1taSzc3Nz46Ojv9oaGj/aGho/2hoaP9oaGj/aGho/2hoaP9oaGj/cXFx/52dnf/Y2Nj6
zMzMp97e3in9/f0C////APPz8w3Ozs5e5ubm1uXl5f/IyMj/rq6u/52dnf+Tk5P/jIyM/3Fxcf9p
aWn/aWlp/39/f//Q0NDd2NjYmM3Nzc+Pj4//aWlp/2lpaf9ra2v/cXFx/39/f/+ampr/vr6+/+Li
4v7g4ODcycnJdObm5h38/PwD////AP///wD///8A/f39Au/v7xHV1dVHzs7OiuLi4rv39/fa/Pz8
7Pv7+/fw8PD/c3Nz/2pqav9/f3//y8vL4dfX15/Ozs7PkJCQ/2pqav9qamr/jo6O//f39//7+/v+
9vb239fX15/Q0NBU7OzsFfz8/AP///8A////AP///wD///8A////AP///wD///8A////AP///wD/
//8A////AP///wDj4+Mj8/Pz8nh4eP9sbGz/f39//8nJyePW1talzMzM04+Pj/9sbGz/bGxs/6Gh
of/4+PjZ7u7uFf///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////
AP///wD///8A////AP///wD///8A7u7uFPPz8/CDg4P/bW1t/3x8fP/ExMTu6enpyM/Pz+SIiIj/
bW1t/21tbf+4uLj/0dHRq////wD///8A////AP///wD///8A////AP///wD///8A////AP///wD/
//8A////AP///wD///8A////AP///wD///8A////APz8/APv7+/fmJiY/25ubv90dHT/pqam/ubm
5vu2trb+eHh4/25ubv9vb2//1dXV/83NzXP///8A////AP///wD///8A////AP///wD///8A////
AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A2dnZp7+/v/9vb2//
b29v/3l5ef+NjY3/fX19/29vb/9vb2//gYGB/+3t7fnb29sy////AP///wD///8A////AP///wD/
//8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////ANDQ
0FLr6+v8goKC/3BwcP9wcHD/cHBw/3BwcP9wcHD/cXFx/7Gxsf/c3NzH9vb2Cf///wD///8A////
AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A
////AP///wDy8vIO2dnZucTExP+BgYH/cXFx/3Fxcf9xcXH/cnJy/5SUlP/d3d3zysrKW/39/QL/
//8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP//
/wD///8A////AP///wD///8A////ANnZ2TTY2Ni80dHR/q2trf+ZmZn/mJiY/6+vr//e3t70zc3N
j+7u7hP///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A
////AP///wD///8A////AP///wD///8A////AP///wD9/f0C3NzcLcbGxnTU1NS24ODg2ubm5t3V
1dW4x8fHaOfn5xz9/f0C////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP//
/wD///8A////AP///wD///8A////AP///wD///8A////AP///wD///8A////AP7+/gHz8/MM5ubm
Hd/f3ybf398n5ubmHfX19Qr+/v4B////AP///wD///8A////AP///wD///8A////AP///wD///8A
////AP///wD////+///+fvwH8B74AeAO+ADADvgAAA74AAAO+AAADvgAAA74EAAe8AgAHsAAAA6A
BAAGgAYAAoAHgAKAB4ACgAEAAoABAALAAAAG4AAAHvgAAH7/wAP+/8AD/v/AB/7/wAf+/+AH/v/g
D/7/8A/+//w//v////4=</Image>  
</OpenSearchDescription>