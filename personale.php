<?php
require_once('database.php');
$conn = mysqli_connect('localhost', 'root', 'root', 'edusogno' );
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//   } else {
//     echo "ci sei riuscito";
//   }

  $sql = "SELECT id, nome_evento, data_evento FROM eventi";
  $result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>Pagina Personale</title>
</head>
<body>
    <header>
        <div class="container">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAVgAAACSCAMAAAA3tiIUAAAApVBMVEX///8tIkxpYn0nG0glGEcpHUn6+ftZUm4qH0oVAD4gEUQXAD8QADzw7/LY19yalaUvI1FEO17JxtAcCkEjFUU3LFV3cYkdDELS0dcAADeEgJFTTGleV3KopLK6uMTAvshNRWbp6OwJADn08/aRjJ+tq7Wjn67Pzdbi4OZtZ4GWkqM/NloEADheWHGJhJgbBkI6MFZ8eIwvIFJ0boYAADE3K1dEOmAheMR9AAAU+UlEQVR4nO1diZaiuhYVGQyDWgoWVqso4IDaLfq8Xf//aU/IeJhttbqq2r3WXbdaIySb5OSModX6ftC6vc3cmy23g9e/2IvVtP33MI0yvfE6tT+ZVQ5m+j4y4xSuIxt/k9idrvw9vPWy3WnbNT/RlxWD8WMFIYnB+ZvE9g3p78HKEbuxYAsV4EKaUUVs64cj/vhJLEd3hMQGaLAQMFAsw64kdhWLv34Sy6H9ksUG8UYTEUb9USWxYzDhPwOx8gcDlRDbegWL2Rxnv/dXVaOJgs9G7KTzsVioJcT+qCG2Gtrb5yJWHfjah6I1jMuINW4htvXJiEWD7gffdmg+iX0InsQ+CE9iH4QnsQ/Ck9gH4Unsg3A/YqPNcMOdZE9i70Ps5lUPLN0KgqmnpR9UERtG4/lqfeqswafdaDNf9U+L4W0DyuErEzueWNROU0zZSz4qItZbLl/bg9+6aZqJm1bvJx9q6afv7NPgSSzD2hIdNqp+ahUTu9ENR1GZ18xNiW3N/wOf6k9iKZa6BOG2tWJR0FZAs37Rp/82saHw99qUsnBPrZ9FxM7sImKhw/T7Ewu9W2IDf9UWLuACj3gyiAtnM0AWJXYI5jYlFtL9/YkF1CinJcHp3DlaHdZMWwCHuCTrimIaCJJdTawHpvw/RqykGASOIiP5F2sGYzCSMxn6fu/gPoltSiwIJHJitYEKWi2w9J1BufskVgAklgcTB0fDNBixQ1cqZKU4SvsktpUlNt5oIUbX73lTJmMPoJU60sjnfmHM60lsq0bd2tA/jkASOCfWolCPfRLbamggRDLYpVxu/T+JvYnYjIg1PfbNdyVWa3qd24iFnEgWb/U9iR2eflbmqYhNbyJ2B2escJlvSGxv51qOOgjrWya4kVio7P7kvf9uxEbro2UkG4q1qW+c4DZit8AxJb3xb74ZsdpCJ9u0oPlU4r7Eauybb0Zsa009RWjU7Eq3EXsABtY3nrEtn3VS9+pbt+4sYwOfffPdiOWLU9k2an8bsSvgSv3WWoFH+45Uv771rcTOoR6r8x3z2xEbMldoXFXWwnAbsWMoY2OejPztiG2d6FjlaZPmtxEbSsBXYOzYN1+aWK0b5qAxWSAZebbyuDFKOwGBGXnBulYYTBwDQ+3zErsZDfJYDOgkqi4YIriR2HWJTQsjr5TYHlB7FfLp6tMFE4eWmoO8X9MxyQutwTVuI7YHhSxVRTYGEBGUWP8ofozkdHsNF8Cn+ymIzWZKJFfY84KVuIFZe2vCxhTaXvZrN8kakgBXPHcLhnSV6YVZfwp14U9L7Ki1p6NqYtY2zSsoI3YINVnJiReTFx3BmDgjFkZyJCVeLEwFfY0ZO+JmrXqsv1opsadaYrGevHUyPVBlJBnQ1lWogrKJs43VSy/b4mMw51cw0AT3I7b7dkUnS4mFGVVmrsF4im1mX5KlLJxF60WUpuqE/mqi5Bqbw7U4j9119k434n7EckmmtOuvUUJs+A63n+VKRP/8EljkqW1cNdMHZxS2QL5B0inSOM4mJFl96HFo6pZrjDsS69EFh6Ras7aM2ChT/e3YIlwFSTZdDhsDrHukT8LLpibOYySzVO9ZAJiVrcsEnYk6G9eF74Q7EhsySRZXFrym1ygh9tVANeByxm8HDqVLtfFafnXEtoJ57Rk2m8yKtU+2qlkstnWyh1LciDsSyzeU+sdfQuw8fqmDLQjwzTm2Ytc19WCy7pLhgMb/45GisP/+ptuubVpmG+fVe+BmTr38ugr3JHbOdCCnzqwtIbZRHS74wXi1XnvDbtkFQGN/PlvPvI1W0vgKChrgnsS22CkO1B4vv0aZVvBt0IxY8DTLiWWKuHqsue2TWIzziS+gCmLHTIGxa8zaJ7EpItswFzu6bZYTy9VI50f1bZ/EpkgyT2TX/bVKm1UQ26eqITKqb/skNkFIbCpFfzkNwypiI1Y4VWPWPolNMGS+duRYg93MLSW21WFmbXW0to5YLfTnq/5u+WO5W3u9sEwV0iJvvTv8OOxm86g2uamhQkVaab63213uvqm4rnZR4JLbLwv62IRYcLKQqm/zHg1GLC+6+Fk50Epitc1yagS6jcs6XDMwOrtxnpXu6vRu6W7ayNatl+2sdBRdb3faTjrb83IWVdOrzReJPa7NJj/N9MKW81q8EWveYaGTTqZ97ANDvgGxPjhkDB1XFTOWt602ayuIDdf7wGCZxWmFEZKNYLCGfQx3jplatPLFnEr2TKTE7qnILtVWHUs3HMdwL//ZP0eHkseptbz+Kdb/u/Az3OvM6XBZpT8KHsZM0p2kDbrcPv2/7FpbwcvZgNgViLo5h025jBUyN+RJxSUriPWUmKoWlz47imLYqR9LfQNGx1ohAXdnMd+sRpgGZFiHPAOGmXwrS9vtKOmcagRbxn8YRb2ht173f3Re9DfTvTyqwG/NdOiTjKdZZucjkq2m7FfD+YIsacc6MyIbENsBd7HGlcTO2ZdvVS6uckf3G1seznG2ibrdaDh7143LhBSu57MsPCUt+OiyogR7BCdtl7RE+0Q0keiuYr0R/AwCSzdd13XYGgm6KyvrZLTP4KLa+Se5n4qZYxQZMt20U2+vuq8gtucA5/FCq9AKLgNhEZpK13EZsVt+bdGrG50CcWyRwcS8jS8xY7JdDsSogx+TlmYqmYQzKRUzWQ9ylsLLFT0l/yFQcsIFE4YkVW3MAn6qRTxq6RaPjhWzawkCRm6/St1qCbEVdV9BLE4SsrIisS+4Y+GXvnBSg28yDyAiN4l46AAF/HF1qa8QqfhqjH/lnBwK0e78Nt8CHbrML2QjOeNFVwcir2wzRy9kRv7mt9cxs2l0Hf0uJzZTBGj5NcSOmUQOKmrisVNcz9zWF+eKU7aKNIP3yKEyVUjhUF/YL1lIhizZFot5I4k9N38zyDBrDToTE4pZlw9GiO+yVSWE6hBumo6wKpMNxkOTK1UTq01oL6syNzCxcea2S1HfKDUxpoL2F9OsUVEHNKjUWLEFQKtFueYo+F81mFjjTBLOu/BDnsa0E/Zygz5XsZRcHvAROuXEwnBoIlOqieWVF+h3ucqI9V0D3hYOEEnFEWlPjN64tA2IcNOE/XceNGhnmwlxm8x9yeT2QZRIXZDGYMth+wjIV7KTT+fpCM3SuIQP8s+QHdYSG7GHZ5WbtekTRi+Q2AjmuiFjWWRkAK1aofIUJB0RGvmWwlIMhLwiXh0GiZV/kfkAUmWY8wNMNHYNwAmSNBpyt0rFIcxwSmOZNcTygF5F5DNNAMhqeb3MIcHI2K9yk94DQ2AyzAOpA3ovQzbtilCO7zA1I0MsVVphioON7zQGfWSZuT0wvRPjqJcSZ5YmuMPsHGvYgNgZS0JWSrW4NH1A7kDaetm8CkmNF1lqYRxWonMadgqLdyGrpoBYbsGUEAsz72w892AKFNNcYHV0culuSmypzgknkTrKjyFPLN/bywsSUumXddRw35jQRxNS2wVTI110KeAh0viRCRtaAbGIqYMlxMKzTTCxIVQgWPVDF+SPSublEumvjbwliJFRYndNiG2d2WlYpZHPNC0wKyq6g2wORjpQfSHIapjVym8L1yKW3jUzdnEdsek2mUlztOiShEctp3mBqWatQJONA6TsSEHUiFguBrP6FEPaj5w+ds4mZJGhWm22ucKCGcRia71MeW0Pti0glj/1RsTG8/xzlUwm6zLEekRmyZNizWgIpB6RSrXEhswOsUtEDJ5fOQfYMCdkKS8qFSpn4LPkQcuMfNYTGoR9jhHLybJZNscVxMIVLLklxCaiNW2KRsVTC7peCRG1xHIJn92eKLwSV8G57OUBKCCzG3qEBGLhL1PWeMUJI5YTg5QSPbaSWKgpSDYjFnKSGIRYT8mn9aV3BHudFGgNieW+juLrkpR2I6c0+IMCJzqGtcxzIIiCCP4QG0onRiMzEOotr0piXzP1OmwE0EediFZ8qEKxvgUlClX86onV9qwgoXhXTLWtolLxaF/6wgvsNuqUEltQSBOxJEO6dJiyhoRknT+fsVzGwiT9hFisHDmFBMDpYQ6bEsu3DXpwUwblO2Y41fM6F6EiamXzZ0uJJcJ9FbCGPhy/KZSjXUFsJje8jNiUztRHLPND2Dh8IJGR0mpMbMR+aRUZ/H6q9RnFeUgr1y6m1kjkJJwypaKAZr4fKLP6mN/4gkBUSK4gNlOuw4mFqftu8thSsVG4e8HiHubfaUAsn+uFpw5jpaeQc3xfs0ihVZNZ1wcj47eNMlOJDqf/HwmhpGnzRETKFiifvILYzNh1RixUw9LGxDVaEIocgeG5VCg1IZZ1qtCHjjX3uDyOu3q3CnaxxAMAXAWigQAIFyRQRAZhTL35Nu2VEkzglnoFsT0YcggYsXCbT58rLkwtcJ4OoZXIfOhNiOUmXpFZm+5tZbozucnZylkLyfrughFwkxYaCNymC6cy0gPbUZEc2wqSnThoZ1fKFcRqJSYt1GOxFqil5WUFQjbj3WHafBNi+SZTYNZij0VdBWN0yjjxsR6dccLQKQN9BewElfDooNHYn/2YvFhvb9ZL57TKr6AriM3sXkwTD4GvgGydqTEjhCpoW3C2JUKsQ42I5XX2LzlfL+5xqYhl2AwylnmyAa2g25BefC5+zO2StkEiEVp6ll9xMsw1xMK6XCZAwfuuEIkqkTBJ1r6cgTkgeKIaEauxRnmzNp10yK3P+OnCssxU39KAYsO0UcAC87DPg4KIZQ7XEAtrIpn6DxaMS7Z57LhXsuXwq4UlRCFsPr8aEcttlFzmhq9nnlQ5wIkPpEh3VRiaEY14blQlLDinunT1q4jduHWhGflIp0x63XwNUbh5laiYQ/smicciaCukZMMTWNmymxwY4YNQEpkInZpgosoiPmH6DIz9r+TFq6+nC5IUuyhLdEloppjY1lJw97A0YKEtYg+71U8/tQuSrfzZ1EiDzeJO04xYbIvIrjOdZdQqvK9ZBWqYlg0XiGVfKlW1faFklm7/AjfCwEhPkZy8eNVJkKSvyYPtciz2KUMsFdDQGGDEhkL4mz0E7kNAgujDnvuSGqLeYRArqiJofg2JPRiq4S76OQkXpbOw8CCO3tvEA9QKtbGIuzPGMiNCJfftcV5jrt/BOcdaqEqSoM4fLKywZ5G4jFbE68sWgouMXIUZ1Mjmx31QFaashiicb4GcHP5n52DKBSwNDgXJl0QamkXJiAdDNidrlunqi7zGQofHR/YFkf1MxCquEG4oJjaFbL+wHmTOM9gXEis8L3/KpAGZnkwHUuFWTaL8ZfGZyywTOY/WswLkfzQvtKxCfBSHVfBldy8nwsN6Py/7/f6yrQgRAAXcwN/SlMTUzm3NyYxB8ULsqVfmOE/bWtTazpjDMVlk70AlEQ6eaWkHm4h0JCUKV4+E5JG9hxF/nNWK1DvXkBVinopNp8izdVljqR6C8FnyfHkZbjv3lvBBjK1L1f2xa5v4T/sI10H2vcwZmERAZ+ItxFbUoMSDknLTiRVyz/PuFT9l5Eq77HTBs75o+7o7yNZVnCV90UNcW3x/N0KK7UqFqcLzjhMnyZcoeQRIvfxjP8vOjNxbKCDesL4ydcAxLA5OR5rp8HSW/+Cz3bSVOMmPRk4yG9DlH9Iur9eN0zWj5neguwMn1xbsdQTacNYeGQap9jaM/XZWWjLme6eFYriu7brG8dUrMASWpW7zFFh3n/9+h/idyO0w8+H7Meun684Pkxdye6m9Kt6h8PZVnrdxN+AJW7c2ur1xgpzGWQDNj/KaKbtOUEmseI7nHyK9fUUSLM40K59I9wJJ8rQ+QponGJqVxJanVt0LJMOjIo3tPtiW+Sgfg2ESiDdMO1mtjqPIMoKvo7n7ETt5YKfRo6UsThxAbsMDp2/FLCkVMHbearZe90+n7WSyf3HerJgpqE0PaL4BpPpQb3Tk4x8D247urr7lPYBdTkFW7PS8V2qs3i5j64GNB+Q8cjJhQwSpH/TWhVSJRC8F33hYWygMod4bGjaY3QeKvxBX1Nh1p0TcCWREZsGsJLU9waO3lBTYJCrLXbkHcFhD3X+QhCUvUyvSIXFM0Gl0IuvtwCqmUhnjuwXkSEf78coyAc4wwuY8gJ+GAZyPehFMDxvH+r3PTKPAE0j5CLmGEanpVFGVJTDKuqu9kzhMOo0Ovb4HcJKgkIZ3V+xSHx4yHq/hMPQGaeYHMuRtf+P7Xd/3e7PT/vKhaqDdRxkpl0eJ04yVXEnuPUBsLrfcN/kAhOuj6aDER+Lqpvz7fy+2ZTuqqpjHwjrxh4HuXw/QDDR8tqvc9GU090LonQfItBOr6wJFcVxT2W+9j37NFslVf4AzhpQTxo+3IXPQos3ssO10BoPJdHrqD3sfJwMYQuIxzmVv3Iq19RcEwWcCEQZKcVrrH2OIM3DkO1/2K+EHjr8Zzd5s0hAROYzhgcbH58cCh8nMOy7aLskHDT7MNPiMoHWF5t0seo08K/vehwp/MQxJpnqzl8bUQyOZI87DbOWvAvIGbWTehVmtTVx0x39346LYUWbvEA7X2tipjNwPNXU+KU6EWf1mZhmvwQe6CD4vtNeYzNkbPV1+B8sB9PAo5ReBdibpZPpNWleP5LqjD0hY+CIIt5TZ85/vOcMR1rNQ/fH9/w7CNsnUcyd/ai7NyPlYqvvkVYD2SpJIFPRH61jbkqJYWXnKAYgDYRaZh+tV+96A5KMpo7/gKfzk2NFC7HhybY7TmlaFOIN/2fFSBo8WC8vmVRGi3oQm7bofF7H7UujJtMonfm8+afsWLbXQ/3G/Szm6C1ofIQenZorXcE9TJ9XgsZlgXxsH9iYspwlP3W3AXjIhPzz79Etj85vlm5vHmh1e65ssRTLY/utuwjqEJ4tOQlVfVFCrrVWXT++nVVCP4Z5Voslxp8xPNZPYYS6q1X5qA02gLfkSV9x2kez0jsIx+6OnsdUUUZvpUJLinHPv5FswWiWn+EDdJ0owH/ATsRwF5D4NOzZjXTa3z1jBddDWI5tXYao/qBTd/LIVTmvn6dK+Ht3dyOXUomWSWjbeugKtmbL4J5rCX0oGL80frXuv/LW7qrl40vrn8A+IU+vGAq35GuEnrkJ0knNnjSH7uH6qAjejd868d9sY9T86lfebYtzmmgAy5OWT1rth0yFBAsM4PM3Xu2I40BXV0E9PWu+O4XaxfNJaiP8Djcbn7sya4DoAAAAASUVORK5CYII=" alt="">
        </div>
    </header>
    <h1>Ciao ecco i tuoi eventi</h1>
    <div class="center">
        <?php
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            //   echo "id: " . $row["id"]. " - nome_evento: " . $row["nome_evento"]. " - data_evento" . $row["data_evento"]. "<br>";
              echo '<div class= event">

                        <h1>'. $row["nome_evento"].'</h1> 
                        <h6>'. $row["data_evento"].'</h6> 
        
                    </div>';
            }
          } else {
            echo "0 results";
          }
          
          mysqli_close($conn);
        ?>
    </div>
</body>
</html>
