<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, height=device-height,
                   minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0" />
    
    <title>SPTS</title>
    
    <style>
    </style>
    
    <script type="text/javascript">
    </script>
    
  </head>
  <body>
    <table>
      <tr>
        <td colspan="2" rowspan="5" width="70%">
          <div>
            <canvas id="canvas" width="100" height="100"></canvas>
          </div>
          <br />
          <br />
        </td>
        <th>
          <br />
          Smart Port Traffic Simulator
        </th>
      </tr>
      <tr>
        <td>
          <div>
            <div>
              시나리오 선택
            </div>
            <select>
              <option value="1" selected>#1</option>
              <option value="2">#2</option>
              <option value="3">#3</option>
              <option value="4">#4</option>
              <option value="5">#5</option>
            </select>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div>
            <div>
              신호등 지시 현황
            </div>
            <table>
              <tr>
                <td class="lights" id="l1" ><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
                <td class="lights" id="l2" ><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
                <td class="lights" id="l3" ><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
              </tr>
              <tr>
                <td class="lights" id="l4" ><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
                <td class="lights" id="l5" ><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
                <td class="lights" id="l6" ><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
              </tr>
              <tr>
                <td class="lights" id="l7" ><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
                <td class="lights" id="l8" ><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
                <td class="lights" id="l9" ><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
              </tr>
              <tr>
                <td class="lights" id="l10"><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
                <td class="lights" id="l11"><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
                <td class="lights" id="l12"><img src="stay.png" width="45%" style="transform:rotate(270deg);" /></td>
              </tr>
            </table>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div>
            <div>
              설정 제어판
            </div>
            <div>
              <table>
                <tr>
                  <td>차량 대수</td>
                  <td></td>
                  <td><div>1</div></td>
                  <td>1 <input type="range" min="1" max="10" value="1" /> 10</td>
                </tr>
                <tr>
                  <td>현재 배속</td>
                  <td></td>
                  <td><div>1</div></td>
                  <td>1 <input type="range" min="1" max="10" value="1" /> 10</td>
                </tr>
                <tr>
                  <td>시작/일시정지</td>
                  <td></td>
                  <td><button>►</button></td>
                  <td>
                    <table>
                      <tr>
                        <td><button>I I</button></td>
                        <td><button>⟳</button></td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <p>no data input</p>
              <p>
                {"light01":"0","light02":"0","light03":"0","light04":"0","light05":"0","light06":"0","light07":"0","light08":"0","light09":"0","light10":"0","light11":"0","light12":"0"}
              </p>
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div>
            <div>
              선적현황
            </div>
            <div>
              <table>
                <tr>
                  <td>평균 대기시간</td>
                  <td></td>
                  <td><div>005</div>분</td>
                </tr>
                <tr>
                  <td>평균 소요시간</td>
                  <td></td>
                  <td><div>030</div>분</td>
                </tr>
                <tr>
                  <td>물건 적재율</td>
                  <td></td>
                  <td><div>010</div>%</td>
                </tr>
              </table>
            </div>
          </div>
        </td>
      </tr>
    </table>
  </body>
  <script></script>
  <script>
  </script>
</html>
