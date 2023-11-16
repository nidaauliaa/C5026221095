<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap">
    <link rel="stylesheet" type="text/css" href="cssuts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script>
        function validateForm(){
            var form = document.querySelector(".forms");
            var nameInput = document.getElementById("fullname");
            var emailInput = document.getElementById("email");
            var age = document.getElementById("age");
            var gender = document.getElementById("gender");
            var position = document.getElementById("position");

            // nama
            if(nameInput.value == ""){
                alert("Name must be filled");
                nameInput.focus();
                return false;
            }
            if(!isNaN(nameInput.value)){
                alert("Name can not contain number")
                nameInput.focus();
                return false;
            }
            //email
            if(emailInput.value==""){
                alert("Email must be filled");
                emailInput.focus();
                return false;
            }
            if(emailInput.value.indexOf("@")==-1){
                alert("Email invalid");
                return false;
                }
            //age
            if(age.value<17){
                alert("Age must be over 17 years old")
                age.focus();
                return false;
            }
            //gender
            if(gender.value==""){
                alert("Gender must be filled");
                gender.focus();
                return false;
            }


            return true;
        }
    </script>

</head>
<body style="background-color: rgb(109, 61, 61); font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    <header style="display: flex;">
        <div class="col-4-md">
            <div class="logo">
                <img src="https://yt3.googleusercontent.com/ytc/APkrFKbxNmc6bfehKIwd6feR5ix1oiNWTLXCFmXxA8AOEuo=s900-c-k-c0x00ffffff-no-rj" alt="Logo">
            </div>
        </div>
        <div class="col-4-md">
            <div class="title-font" >
                <div style="margin-left: 9vw;">Zhafiraiha</div>
            </div>
        </div>
        <div class="col-4-md">
            <div class="social-icons">
                <a href="https://www.instagram.com/zhafiraiha/" class="social-icon">
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAPDxUQDxAVEA8QFRUQFQ8VDw8VFRcPFRYWFhYVFRUYHSggGBolHRUVITUhJSkrMC4uFyAzODMuNygtLisBCgoKDg0OGxAQGi0lICUtLy0tLi0tLy0yLS0rLS0tLS0tLS0tLS0tLS0tKy0tLS8tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOAA4QMBIgACEQEDEQH/xAAcAAEBAAIDAQEAAAAAAAAAAAAABwIGAwQFAQj/xABNEAABAwIABwgKEQQBBQAAAAABAAIDBBEFBgcSITFBUWFxgZGTsdITIjJCcnODkqGzFBYXIzM1Q0RSU1RigrLBw9EkNMLTdCVjovDx/8QAGwEAAwEBAQEBAAAAAAAAAAAAAAMEBQIGAQf/xAA+EQABAwIBCAYIBQMFAQAAAAABAAIDBBEFITFRYXGBkaESMkGxwdEGExQiIzNCchWy0uHwUpKiNENigvEW/9oADAMBAAIRAxEAPwC4oiIQiIiEIiIhCIiIQiIiEIiIhCIiIQiIiEIiIhCIiIQiIiEIiIhCIiIQiIiEIiIhCIiIQiIiEIiIhCIvHwxjFS0eiaUB+sRN7Z5/CNQ3zYLUK7KUSSKenAGx8ryTxsbq85dsjc7ME+OmlkF2jJwVHRSR+P1cdTo27wi6xKxGPNd9a3mmfwnijkOjimGilGe3FV1FJPbzX/Wt5pn8L6cea/6xvNM/hMGHyntHPySzTPGhVpFIzjzX/WN5pn8L4ce6/wCsbzTP4R+Hy6Rz8kezv1Kuoo+ce6/61vMs/hfDj5hD61vMxo/D5dXH9kezv1Kwoo6cfsI/Ws5li+e3/CP1rOZjR+Hy6Qj2d+pWNFGjlAwj9azmY1lHlEwg3W6J286HqkL57BLqR7O/UrGimmD8qJuBU02ja+J2niY/rLc8C4xUtaPeJQ5wFzEe1eOFp023xoSJIJI+sEt0bm5wvYRESVwiIiEIiIhCIiIQiIiEIiIhC+E2U2xux80mCidYanVI27oi3vvcmwplJxpIJooXW0e/OB130diHFpPCBuqdAoBF16DDsLBYJpRnzDxPgN5XM6QkkkkuJuXEkkndJOsr6CuIFZAqtj1qPjXMCvoK9LA+LlXVAGKE5p+Ud2jOJx7r8N1tFJk1lIvLUsYdxkbn+klvQqBO1ucrMnmiYbOdl4rSAVkqCMmrPtTuab1lkMm7PtTuab/Kc2tiGc8lC+oiOY8ip4QsSqL7nDPtTubb1k9zdn2l3NN6yZ7dBp5FL9ezSpuQsSFSfc1Z9qdzTesvnuaM+1O5pvWR7bDp5FfPXs0qakLEhUv3M2fanc03rJ7mTPtTuab1ke2w6eRR69mlTIhYkKjz5MD8nVi+46D9Q/8ARa9hTEiupwXdjEzB30RLjbwCA7kBXTKqFxsHDu77LoSsOYrViF9Y4tIc0lrmm4c0kOB3QRpBWbhs2jRbfWBCemKjYnY/kkQVzhp7VlToGnYJdg8Ll3VSl+bCFTMmeNJfaiqHXcB7y8nSWgXMR3wNI3gRsCy6ukDR02bx4hSSw295qo6IizVMiIiEIiIhCIiIQi8jGfCgo6SSc6XMbZg3ZXaGDguRfeuvXU2ywV5ayCAHQ4vldxDNb+Z/IuJHdFpKsw+mFRUsiOYnLsGU8gptJKXEuJLiSXOcdZcTck75JQFcQKyBU7Hr9AfGuzDG57g1oJc4hrWgXJcdQA2lVHFTEOOECWsAll1iLQWN8LY93oG/rWGTXFoRRislb77KPe2kdzCe+8Jw9Ft0ra8N4Xio4jLKbNGgNFs5zzqa0bT0aSdCraTZeRxOvdJIYINNrjOToGrZn2Z/R0AbgHQvErcbKGE2dUtLh3rLyG+4cwGylmMONdRWuIc7scGyFpObb75788OjcAXigprGA50uLByBeU7h5/srB7fsH/TfzT09vtB9N/NOUhBWQKpbAw6V9dhsQ08vJV72+UP03805Pb3Q/TfzTlIwVmCnNo4jnvy8kh1EwaeKrPt7ofpv5l6+e3yh+m/mXKUoQnfh8Ovl5JPs7daq3t9oPpv5ly+e36g+m/mnKUELAhfPw6HXy8l89nZrVhpsdsHyG3Z8w/fje0ecRb0r3aaoZI0Pje17Dqc1wcDwEL8/kLtYMwpPSvz4JDGdo71285upyXJhzfoPFcupx2FVnGTFKnrWlxHYp9k7RpvsDx344dO4QpDhjBU1JMYpm5rhpBHcubsc07Qq5injTHXtzXAR1DBd0d9BH02bo3tY5CexjTgFlfTmM2Erbuikt3L9w/dOoj9QEiCofA7oSZu7YlseYz0XKFkLOGV0b2vY7Newh7XDY5puDyrOogdG9zHtLXsJa5p1hwNiOVcJC2M6sV/xfwo2spY6hujsjbubuSDQ9vE4EL0lPckVbeKeAn4N7ZW8EgIIHGy/4lQl56aP1chas57ei4hEREpcoiIhCIiIQij2V95NawbBC1tt8ukJ/TkVhUbyvH+ub4ln5nqarNo963vRsXrh9pWlAr2MU8F+zKyOI9wXXf4tvbP5QPSvFBVDyO0+dUTSnvIwweUcD+2pYXdJwC9dikhgpZJBnAybTYDmVVWtAFhoA1DcUSx2w+a2qcQfeYiWRjYWg6XcLiL8GaqpjhWGCgqJAbO7GWg7jn9oDyuCg4OlXvdY2XlsApQ7pTEZsg8fDiuUFZAriBWYKYx63XxrkBWYK4gVkCq2PUb41ygrIFcYKzBVbHqN7FyArJcYWQKrY9RyRrIhYkLJLJ4SLL3sBYnVNXH2UFsUR7lz73dba1oGrfNl5+H8AT0Tw2UAtffNkaSWm2saRcHeKrmLdTHJRwuitmCNjbDvS0Bpad8EWWv5UKiMUrIjYyPkDmjaGtDs53Bpt+JZUVZI6bonMTa2hSNmcX2U0oKuSCVs0Ts2SM5zT+h3QRcEbhVxwNhBtVTxzs0Nkbe19TtTmnfBBHEoQQqVkpqy6GaEn4N7XjebICLcrCeNNxCIFnT7R3LqoaLdJeLlSwUI6llQ0WbUCzvGssL8bSPNK0chWDKdTB+Dy/bFJG8cZ7H/AJqQkJlE/pQjVk/nFdQG7FumSWS1bK3Y6Au42vZ1iqwpLko/v3/8d/rIlWln1w+MdgU8/XRERRpKIiIQiIiEIo5lebeuHiWdMisakWVdl64eKZ0yKOuNot4W96OG1aDqKnwKp+RX515D95TWSNUrIr878h+6oqR15Rv7ivVY8b4dJ/1/M1bNlL+Kp+GL1saiIKt2Uv4rn4YvWsUPBVk7rSbvErO9HG3oz957mrkBWYK4gVmCu2PWq9i5QV3sFYMmqpOxwRl79ZtoDW7rnHQ0LlxawHJXziJmho7Z77XDYr698nUBt4AbWzA+CYaOIRQtzW6ydGc521zjtKrY82WBidcym9xuV3dt8Bv0LUMD5OI2gOqpDI76uMlrBvF1s53CM1bPT4s0MYs2kiNtrow88r7ldfD2NVNRdrI7OltcQssXW2F2xo4TwXWnVeUuocfeYI2D72fIfQWhd3c5YYjrKodLLbgN37LfpMA0bhY0kJ8hH02Xj4SxEo5QTGHQO3WOu2++11xbgstThyj1gPbMheNzsUjTy5/6LY8DZQaeYhs7TTuPfF14777rAt4xbfXYbKzK2+7yXD6Wqiy5dxutQw9itU0d3OHZYR8swGw8NutvpG+vDV7Ga9uxzXDeIIPSFNcdsVBT3qKdvvJPbxj5Mna37m9s4NV1LWdI9F/FEVR0/ddnWsUWEZ6e/YJXxX1hriAeEaiuCqqHyuL5XukedbnOLjynYsEIWkGi97Zf525061jdcRC3zJN8JU+DD0yrRiFveSf4Sp8GHpkU1b8h27vCVN1Ctjyg/Fk3k/WsUYIVoygfFs3k/WsUaIScP+UdvgFxT9VbdkpH9e//AI7/AFkSrKlGSof17/8Ajv8AWRKrqOv+buCTP10REUaSiIiEIiIhCKU5UGXrB4pnS9VZS/KQy9YPFM6XrPxM2gvrC2cBNqu+orQZY1QsjQt7K8h0SrSJY1vmSJtjVeR/eWdQPvM0be4r1GMvvh8g+38zV72Uz4rm4Y/WMUMBVzymfFc3DH6xihQKurHWl3JfowL0TvvPc1coKyGk23dCwBXu4j0YnwjAwi7Q7Pd4MYLtO8Q0DjXMbrmy16kiJjpHZgCeAuq3iVgNtFStaRaV9nyG2nPIFm8DRo5TtXQx9xpNFGIoSPZMguNuYzVncJ0gX3Cdljt5Nhcr8+4fwoaqrlnJ7V5cRr0Rg2aPNA47rSc7oiy8JhlMa2pdLLlAynWScg2eVl1nSlxLnEuLjcuJJJJ1kk6ygK4gVmCu2PXp3sXICswVxArIFWMeo3xrcsR8aXU0ggmdemebAk/BOOog7GHaNmvdvVJomvaWuAc1wLS0i4LToIK/PoKsmImEfZFCwuN3x3hcdpzAM0nfzS1LnaOsFgYjThvxBv8ANTTGPBhpKp8XejtmE7YndzyaRwtK85UDKnRjNhnGsOdCeBwz28ma7lU9BWpTTdNgJX2M+sjDuKyIW9ZKfhKjwYumRaKt7yVfCVHgxdMi6rfkO3d4SZx7hWxY/wDxbN5P1jFGyFZMfvi2byfrWKOkJOHfKO3wC4p+rvW3ZLf79/iH+siVWUryW/3z/EP/ADxKqKSv+buCRP10REUSSiIiEIiIhCKb5Q2Xqx4pvS9UhT7Hxl6oeLb0uWZi5tTbwtXBjap3HwWkyxrdslTbGp8j+6tTkjW5ZMG2NT5H9xZOFuvUN39xXocVfeikGz8wXp5Rx/0ybhi9axQ58aumUMXwbLwx+tYorLGtDEHWlGzzXfoy61I77z3NXQBW75J23whwRyEegfqtNkjWxZOazsOE4QTZsl4z+MFrfTmrinf77dq2MTb06OUD+k8hdWjDbiKWcjWIZCOHMNl+eL6eMr9IzRh7S06nAtPARYr854QpXQTPif3UbntOja11r8BtfjWlUGxC8z6MkFsre33Tuy91wuMFZgriBWYKGPXoXxrlBWQK4gVmCqmPUcka5AVT8k5PYJhs7I08ZYL9AUuBVfyaUJioc8ixne6X8GhjeXNvxp73XZZYmLANg2keaZTAPYF9yVhHDZw/UqUgqlZVakCnijvpfIX2+6xpB9L2qZgqmldZikomfAudJXKCt9yVd3UeDF0yKfgrfslB98qPBi6XqipdeBw2d4S6plmErZcffi2byfrWKPlWHHz4tm8n61ij5C+4d8o7fAKan6p2rbclw/rn+If+eJVNS3Jf/fP8Q/8APEqko6/5u4JE/XRERRJKIiIQiIiEItGx1Zeo8m3pct5Wm43svP8Agb0uWRjZtSHaFoYYbT31FahLGtqycNt7I8l+4tfljWz5P22M/kv3FiYQ+9Uzf+UrbxF96R42fmC7+Pgvg+Xhj9axR2WNWTHgXoJPwesapNLGtHFHWnA/4+JTfR99qY/ce5q8iWNcMTnRvD2HNcwgtduOabg8oXpSxrpyxqZki9Mx4OQq+YBwo2rpmTs79vbD6Mg7pvEbrRMqGLBP9dA3YBMANIte0nBawPADuleHiHjP7BlMct/Y0pGdrOY/UJANotYEbgG5Y2SKRsjQ5pDmOFw4EEFp2g7QV6CN7aiO3b4rws8cuEVvTZ1Te2tva3aO8Ahfm1fQVVMZsm7JnGWjLYnHSYXXEZP3SNLOCxHAtFq8UsIQnNdSyO32MMg4bsukFj2ZwvVU+J0lU27XAHQSAeefddeQCsgV34sXK5xsKWUnxM1uWwC2fAeTepkIdVOEDNoBa6QjcFrhvCSeBURuJzJdTVU8Iu9443PAZV42KmAZK6cMF2xNs6R/0WbgO6dQ5dit9PC2NjWMAaxgDWtGoNAsAOILrYKwXDSxiKBga0ad0l21zjrJ31quP+NYp2GmgdeoeLPcD8FG7f2PI1bgN9y9S8jUTSYhOGxjJ2eJP8yZlqOPmGBVVjsw3ihHYmHYSD2zhwuuN8NC18FcIKyBVUbrLdEAjYGNzBcwK37JN3dT4MXTIp8CqBkl7up4IumRNld8MhZ1cy0Lt3eFs+P3xdN5P1rFIVXsfvi2byfrGKPgp2Husw7fJZ9K28Z2+S2/JkP613iH/njVSUuyZf3jvEP/ADxqoqWvN5twU1R10REUaQiIiEIiIhCLU8aG3m/COkrbFrWMbPfQd1n6lY2Pf6MnWO9V0JtNuK1qWNe3iS60krfpNafNJH+S82SNdjAc/YalpOhru0PA7V6bLzGFziOpY45r245PFbFR8SBzRo7jfwWxY0Qdko5QNjQ/zHBx6FKZY1aZIw5paRcEEEbx1qWYawcaeV0Z706DusPcnk9N16DGoiHMk3HvHiucDnADo9d/A+C16WNdSWNetLGupLGslj16iOReRLGvexXxynoDmH32nJuY3OJtulju96OleZLGupLGroZiw3aU+SKKoZ6uUXH84HYrfgbG6iqwBHMGPPyUhDH33ANTvwkrYF+ZntI1G3Au3S4bqohaKeVgGxk72jkBWtHXkj3hwWBP6LNJvDJYaHC/MeS/Ry6OEsKQUwvPMyIfecATwDWeJQZ+MladBq5yNw1M1ulee6RxOcXG51uLiSeElOFWDmCSz0WcD8STJqHibWVIxlyj5wMVCC2+gzvFneTbs4Xcm1T50hJJJJuSS4kkknSSSdZ31wBZArtspJWxDQRUzejGNp7TtPhm0ALnBX0FcQKzBVLHrh8a5AVSck1Mc2ol2OcyMcLQXH1jVNYwSQACSSAABcknQABtKuWKmC/YlJHCe7tnvP8A3HaSL7baBwBPc+7bLCxZwZF0e1x5DKfBdLKLNm4PeNr3RtHnBx9DSpECt9yqYRBMdMDfN9/eNwm7WejP5QtABVNKei1T0cREAJ7ST4eC3PJh/eu8Q/1kSqal2Sxl6qR2xsLhxuezqlVFIqzeTcFnVgtKRsRERTKVEREIRERCEXjYwQ3DX/RuDx6R0FeyuCqhEjCzdH/xR19P7RTPiGcjJtGUc0yJ/QeHLTXtXBLGu/LGQSDoI0Eb6672r81BtkK3GP0LZcCYQ7NHZx98ZodvjY7j6Vx4dwM2qZos2Rvcu/xdvdC1yCZ0Tw9hs4chG0HeW2YOwkycaO1eNbDrG+N0b69xhtfHWxeom61rfdrGvT29oWdPE+B/rY83d+3K2RTKvonxPLJGlrhsPSN0b686WNWOtoYpm5srA8bL6xwHWOJa5WYkxO0xyOZvOaHj9Cp5cHlYfhG415D5LXpsajItKLHVlHn3qaSxrpyxqkPxAcfl2827rLhfk6efnDead1lyygqR9PMea02YzRjPJyd5KZSxrrSRqnPyaPPzlvNO/lcb8lrz86bzb+sqW0k/a3mPNVsx6hGeTk79Kl4KzBVHOSd5+dN5p38oMlEn2pvNu/lUNp5h9PMea7OPYcf9z/F36VOgVkCqJ7lMn2tvNO6y++5S/wC1N5p3WT2xyaO7zSXY1h5zSf4u/Sp4CuVgJIABJJsAASSTqAA1neVIo8ljAffaolv0WQhp85xPQtrwLixSUemGK7/rX9u/id3vALKpjXdqz6nG6Vo+Hdx2WHPLyWuYh4mmEipqm2lGmOI97fv3/e3Bs4dW5YVwjHTQvmlNmMF98nUGjdJOhMKYShpozLNIGNG06ydxo1uO8FH8bcaJK+QAAsgYe0jvpvqznW1u6NQ2kvWHDDNiMvrH9XtPYNQ1/wDpXnYUwg+pnfPJ3b3Z1tgGoNG8AAOJdYFcQK7FJA+WRscYznvcGNbuuJsFUx4W8+MNFhkA7h+ypWSyizYZZyPhXhg8GMaSONxH4Vva6OBsHtpaeOBukRtDb7rtbncZJPGu8pnu6TiV5GeT1khdp/g5IiIuUpEREIRERCEREQheRhaiv740ae+G8vDc1bmvIr8GXu6PXtbu8G4vK4zgznuNRTjL9TdOsa9I7c4yq2nqOj7rlrr2riIIN2kgjSCDYg7xXdljINiLEbLLrvavKtJadfctNrl3KTGOVmiRokH0u5P8FejHjNTHui5nCwn8t1rcka6ksa3KfG6qMWJDvuF+eQ8brk0UEmW1tn8K3T2x0f13/hJ1VicZ6IfLjzZeqtBljXUljV7cdmP0t5+aa3CKc/U7iPJUY410I+cDzJeqsTjfQD5wPMm6qmEsa6ksae3GJT9I5qluBUx+p3EeSrBxzwePnI5ubqrA474NHzpvNzdVR6WNdSWNPbibz2DmqGejlIfqfxH6VbPbzg37U3zJuqnt5wb9qb5k3VUJkYuMFOFe89gT/wD5akP1v4j9KuU+ULBrdUxeRsbDL0uAHpWu4VyojS2lg/HMR+Rp/wAlMQsgU0VLnLtno7Rxm5BdtPkAvRwnhWeqkz55HSO2AnQ0bgA0NHAF1QVxArsUtO+VwZExz3u0BoYXOPEE5r1Y6JrG2AAA3AeAQHdVRydYsGEey522leLRsI0sYdbiNjiNmwcJAxxPxEEJbPWAOlHbNh0FrDsc86nOG5qG/oIoCrBNl5LFMRa+8UJuO06dQ1a+3ZnIiL4sJEREIRERCEREQhEREIRERCFwT0zJBZ7b/wDu6vNnwID3Dy3eIv6V7KKOooKeoyysBOnMeIypjJXs6pWtyYBk2OaeN38Lifi5KdrOV38LaUUX4DRf0n+4p4rZh2jgtOfitMdsfK7qrrvxQqDtj893VW8ouxgtIOw8U0YnOM1uCn78Sak99F57+quF+IlUe/i8+TqqjImDCaYdh4poxipGa3BTN+T2qPykPnyf61135N6s/KQc5J/rVURdDDIBp4pox6rGYjgpK/JjWHVJDzkn+tcLsllYflIOcl/1qwImChiGnimD0jrh2jgo8MllZ9ZBzkvUWceSurv200Nt0PlvyZn6qvIuxSRjTxXx3pHXEWuP7Qp3g3JdC3TUVDpPusY1g4CTnX4rLcsF4GpqRubTQtjvrIF3O8J50u4yvSROaxrcwWbU11RU/NeTqzDgMiIiLtSIiIhCIiIQiIiEIiIhCIiIQiIiEIiIhCIiIQiIiEIiIhCIiIQiIiEIiIhCIiIQiIiEIiIhCIiIQiIiEL//2Q==">
                </a>
                <a href="https://www.youtube.com/@Zhafiraiha" class="social-icon"><i class="fab fa-youtube"></i>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAkFBMVEX/////AAD/wcH/kZH/lJT/7Oz/vr7//Pz/9fX/xMT/+Pj/ysr/5eX/4uL/39//m5v/JSX/z8//ubn/tLT/pKT/n5//l5f/rq7/2dn/Tk7/1NT/Rkb/8PD/Xl7/PT3/MTH/Ghr/gID/p6f/cXH/DQ3/h4f/amr/NTX/Z2f/VFT/fn7/YWH/d3f/QUH/IyP/WFjVEipKAAAEd0lEQVR4nO2c2XLiMBBFPQaDwQubjdm3sGSb5P//bgzDGhxCua+QIPe85QGVTgqkVqvVlkUIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCCCGEEEII+eWUqwPH94Mw7PS8SqnZSmZRHNdq7WKxWNiT/tFu1+I4ms2SVqniNTphGPi+M6jqnv45qU/gNZOotngadkfj8cdk/kfAfFIfj0fd4fuiFiWlRqDRuep4SWHZXU0kPtcwGXWXxaTi3NbUW3RVi53Tf28NbqNXLd7ebm/ZuoFgpM9vzbyp2M8Z6RVMeVH6XW3o1tvQUSfo6Xbb0lAl2NFttidUI+jq9jowV7M7DnV7HfGmQrCk2+qEigLDum6pE1Z4waZupy94cMO+bqUvwH+Jjm6jM9DLqWlfUvy2P9UtdEYRbGjWSrqmDzbU7ZMBVtCckPRAADW0detkgN0RNWYuviWGGr7r1sngFWpoWkSz5gVqqNsmi/nDG0K3C/Oi0jUO0LCnWyaTHtCwolsmE+Q5vyWYhyf58EWQKf6aYB62VV3ApE5oAw2ngnnY6ef9T5DUCVOg4ZNgHvZmhIqC49cT0HApmIe9HSOGme14BhpKvmQ7Q8tFB7fIsO2vYB72YZgAG96OgIaSH5F9PFAJee8/ARpK5mGfDtVG+aWUYYJlyTS+GFoDycJ8iqGGaZSLuio31lAWBR6BS3sP0IaWVUAY4o5PPt7Qcp7lhrh8oihb+o2hZTVWUkNcUYboAPytoWUlQkPcEVhURnPB0HKnIkPc9ZOojuaSYRrIvQiGxmW9RUmMy4bp4PkDOVwaQ3Rr8ZOh4Fz189CGGFrua76hSzBDUSnNVf/oMFdJ7j0Z5ksF3ZNhvgjnjgxzRql3s9LkPmngDJXuh7384SluP1QY04iOGLiYRllcWpZlbXBxqaqzRfNDJAg8W6g5H3bE2VNcuXegwNAFpNx8mKGCPI3kvm4P7m0JPNcGSn0bm03MF2bfj+EAdwWFM0TeWyCvEXGClmTfOjGEXgXXgYaSi4YjQx/79BRZJYy5A56i1LYMgYaS8HhnOIOZ7VgCDeW1GN4YJrbnHWg4FcxjU0+j5N3bAmgoOeTYVllRTRSyDNrMujZcIsrU2kRksb6Z9aXIN91m1gi7QMPHr/M20nACNTTxvcUn1PDx38w8/rsnsx7j/wf7du3x3x+auJhiBX/BO+CpbqEzCmBD897jo9tGmBeZQqPSNaZFNdgXpGtM+5oij79bzFpNP/CChoU1SprvKXl/lpOuCkGTen1BnwAfYU5wim+htMWUnnsKO2CakXNTsFEcGOjf+OuKWgruUZbBvhJ086QsZgquka6lAI9GswnjNw0RTnehbAnNxA2b0XTYH4uaW1/DZNVdFhJPX9trd+B0Kq1ZXHhdfvZX4/qHrBho29D77X9Db09nQ+9vKafOfhCEYa/h2Zue7NG2J3vxuCd7sV2rxVE0S1rNUqXR2zRldxzXPB9CCCGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhBBCyK35B1POXrZYAfBXAAAAAElFTkSuQmCC">
                </a>
                <a href="https://hk.linkedin.com/in/zhafiraqyla" class="social-icon"><i class="fab fa-linkedin"></i>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAe1BMVEX///8AZsgAWMTu9PsAZ8kAYccLaspbjdRoltcAXcYAY8cAXsYAW8UAVsQAYMYAWcW3y+ugu+StxOjS3/KSseHM2vDi6/fB0+1gkNVTidNznNmGqd41ec7F1e4sdc0icMuYteJAfs/s8voAR8AATcF4oNtMhdKHqt7b5vUTFPKpAAADbElEQVR4nO3b6XKiQBRAYSFipKHFbdzNOpq8/xOOJKmJ6G1MAnJD1/n+xlB9ir2BTgcAAAAAAAAAAAAAAAAAAAAAAAD1mkxv73p3y5c/2gO5knEvTIwJjEmyYKQ9mCuY3acm+C/uTrQHVLe5Peo7MHasPaR6bW1wyq/Ep/PAQ+Kr9rBqtDFCoelpD6s+w0wIDILUn+1UXIU+rcSZtBfmQl9OGePYUZg8aA+tJruBozDqaw+tJgt5NzzsiI/aQ6vJ0lm40R5aTfrer8O1cz9caQ+tJkPnsdSXm6gb1/nQzrSHVhfHocabA02nM5FXYjjXHlh9FtKxxpsj6RsjbKfxjfao6jTLzhKtL5fdH2ZBcUONEp/u8N/1j+aijF16tYl+eF3YNImiKInt0tc54c58uuqvpkMf1x8AAMD3zLbD8Wg0Gs8nv+ja6EZ2+TenC9quN1mWJnGSJHGc2W5//NRYRKnnUPJcCMjs+S/+Fp6/TVZpOijeZ0axffwVz+gc8zSFwq7wi3j4+ffhXRhJSzHx4BdMSlYv3N6fzxJ8/qyrPqdVtfBmad19+Xq0C42sIxULh5m4fR4bGN1pn2qFO9eceYFV3RsrFe5djz1OF7dTqstVKdwkXwsMguxFq69S4d71aE5gh64BXN2PC7e7L26i7zK167ifFprbL2+ib6Jl2wqD0rOgwGpNxP648LvUHkk2VhhkW98LtR5KNleo9dCuwUKlN1gaLAzCFheaKDmILpxBYpULmxoKTWo3q+lo9LB7DOOySJ0XHisXRnZxdBs/35fdECdN1+WqFtr+yZTa5M59ORdqvGlVsTATpmF28tvxgdKOWK0wE1/bWKeOnyfTZqIKKhW6rqZvHZM3KmfEKoXJ2rVUx62j0Zh3q7QOnUsdyUcbc3v1nnMVCuOSSXv5YNO6wpLFyh8BtKxwUDZFKH+q0rLCtOyO9lXcTFtWaEtnz0IPCss/bxNP+u0qNPvS5XpwpDHlt0LiYttVeOFmj8LmUJijUCK/nEHhNVCYo1BCYXMozFEoobA5FOYolFDYHApzFEo8mPOmkMLGUJijUEJhcyjMUSihsDkU5iiUUNicaxV68LZJywuL7zuJ36kNygvFL9gjjcK4J0kKheJPggvzNNL/dLW/XAcAAAAAAAAAAAAAAAAAAAAAAPDGP4OGOxZVnJvqAAAAAElFTkSuQmCC">
                </a>
                <a href="https://twitter.com/zhafiraqyla" class="social-icon"><i class="fab fa-twitter"></i>
                    <img src="data:image/png;base64,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">
                </a>
                <a href="https://www.tiktok.com/@zhafiraiha" class="social-icon"><i class="fab fa-twitter"></i>
                    <img src="https://i.pinimg.com/736x/79/46/6a/79466af5bb67dba45953d35c3ebc4546.jpg">
                </a>
            </div>
        </div>
    </header>
    <div class="slideshow-container">
        <div class="mySlides">
            <img src="harvard_gradu.jpg" >
        </div>
        <div class="mySlides">
            <img src="istanbul_youth_summit.jpeg" >
        </div>
        <div class="mySlides">
            <img src="exhibitionpt2.jpg" >
        </div>
        <div class="mySlides">
            <img src="harvard.jpg" >
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <br>
        <div style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
            showSlides(slideIndex = n);
            }

            function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }


            </script>

    </div>
    <div class="orientation">
        <div class="title-logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHfBf0dawnNDX_0H4tqN9mas8qDnOSRYzhnQ&usqp=CAU" class="col-4-md">
            <div class="col-8-md">
                <h1 style="margin-left: 3vw; margin-top: 5vw; font-weight: bold;">GET TO KNOW ME</h1>
            </div>
        </div>
        <div class="content">
            <h5 style="margin-right: 3vw; margin-top: 1vw; margin-left: 4vw; padding-bottom: 20px;">Zhafira Aqyla is a dynamic visionary whose journey unfolds at the cutting edge of education and innovation. Armed with a master's degree from Harvard Graduate School of Education, she thrives in the realm where education, ed-tech, and entrepreneurship converge. Zhafira's academic voyage began at Osaka University, where she earned her B.A. in Human Sciences as a distinguished recipient of the Japanese Government's MEXT scholarship. Today, as an EF 360 Global Management Trainee based in the bustling heart of Hong Kong, Zhafira's path is a relentless quest to reshape the future of learning. She is the Founder and CEO of Knowbetter, a venture dedicated to sparking vital dialogues on faith-based sexuality education for Indonesia's K-12 students. Embrace the journey with Zhafira and be part of an exhilarating odyssey that promises transformation, innovation, and the boundless possibilities of education.
            </h5>
            <img src="getttoknow.jpg" style="margin-top: 10px; margin-bottom: 30px; max-height: 30vw;">
        </div>
    </div>

    <!-- BLOG START -->
    <div class="blog">
        <h2 style="margin-left: 4vw; padding-top: 3vw; font-weight: bold;">CHECK MY BLOG!</h2>
        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="https://zhafiraiha.com/2023/07/03/the-harvard-commencement-speech-i-didnt-send/">
                    <img src="blogharvard.png" >
                </a>
                <div class="desc">
                    <h5>The Harvard Commencement Speech I Didn't Send</h5>
                </div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="https://zhafiraiha.com/2023/02/25/when-you-couldnt-love-them-back/">
                    <img src="blogpink.png" >
                </a>
                <div class="desc">
                    <h5>When You Couldn't Love Them Back</h5>
                </div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="https://zhafiraiha.com/2023/02/18/kissing-failure-goodbye/">
                    <img src="blogrelentless.png" >
                </a>
                <div class="desc">
                    <h5>Kissing Failure Goodbye</h5>
                </div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="https://zhafiraiha.com/2023/01/16/rekindling-old-spark/">
                    <img src="blogharvard2.png" >
                </a>
                <div class="desc">
                    <h5>Rekindling Old Spark</h5>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="readmore">
            <a target="_blank" href="https://zhafiraiha.com/" style="color: black;">see more...</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="platform">
        <div class="taulebihlogo">
            <img src="https://taulebih.com/wp-content/uploads/2022/12/Logo-Taulebih-Full-color-300x79.png">
        </div>

        <div class="taulebih">
            <div class="writings">
                <h5 style="margin-left: 4vw; margin-right: 3vw; margin-top: 2vw;">KnowBetter or TauLebih is an online platform initiated by Zhafira Aqyla that provides knowledge about Islamic-based sexuality and reproductive health education. TauLebih also provides several curricula including Understanding Gender, Skills for Health and Well-being, Sexuality and Sexual Behavior, Values, Rights, and Culture, Violence and Staying Safe, etc.
                </h5>
            </div>
            <div class="pict">
                <img src="taulebih.jpg" style="margin-bottom: 30px;">
            </div>
        </div>
        <div class="knowlunteers">
            <div class="excited">
                <h3 style="font-weight: bold; padding-top: 0px;">WE ARE EXCITED</h3>
                <h5 style="font-weight: bold; line-height: 2;">TO WELCOME PASSIONATE</h5>
                <h5 style="font-weight: bold; line-height: 0.7;">KNOWLEDGE SEEKERS AS OUR TEAM</h5>
            </div>
            <br>
            <div class="row">
                <div class="col-6-md" style="text-align: right;">
                    <h6>CONTENT DESIGN TEAM</h6>
                    <h6>CONTENT WRITER TEAM</h6>
                    <h6>GRAPHIC DESIGN & COMIC TEAM</h6>
                </div>
                <div class="col-6-md" style="text-align: left;">
                    <h6>ADMIN (SOCMED TEAM)</h6>
                    <h6>CONTENT IDEA (SOCMED TEAM)</h6>
                    <h6>TALENT (SOCMED TEAM)</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="contactform">

        <div class="forms" style="padding-top: 20px;">
            <form name="myForm" action="https://google.com/" onsubmit="return validateForm()" method="post">
                <h2 style="font-weight: bold;">LET ME KNOW YOU!</h2>
                <div class="name">
                    <label for="fullname">Your Full Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Your Name">
                </div>
                <div class="email">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email">
                </div>
                <div class="age">
                    <label for="age">Your Age</label>
                    <input type="number" id="age" name="age" min="17">
                    <p style="line-height: 00.2; font-size: 7px;" >*Must be over 17 years old</p>

                </div>
                <div class="gender">
                    I am a :
                    <label for="gender">Female</label>
                    <input type="radio" name="gender" value="female">

                    <label for="gender">Male</label>
                    <input type="radio" name="gender" value="male" >
                </div>
                <div class="position">
                    <label for="position">Position You Want: </label>
                    <select id="position" name="position">
                        <option value="Content Design Team">Content Design Team</option>
                        <option value="Content Writer Team">Content Writer Team</option>
                        <option value="Graphic Design & Comic Team">Graphic Design & Comic Team</option>
                        <option value="Admin (Socmed Team)">Admin (Socmed Team)</option>
                        <option value="Content Idea (Socmed Team)">Content Idea (Socmed Team)</option>
                        <option value="Talent (Socmed team)">Talent (Socmed team)</option>
                    </select>

                </div>
                <div class="reset">
                    <input type="reset" style="background-color: rgb(139, 213, 213); border: none;">
                    <input type="Submit" style="background-color: rgb(139, 213, 213); border: none;" >
                </div>
                <div class="thanks">
                    <h3 style="padding: 10px; font-weight: bold;">THANKYOU!</h3>
                    <div class="imageknowlunteers">
                        <img src="knowlunteers.png">
                    </div>
                </div>
            </form>

        </div>

    </div>
    <div class="tugas pt=5 pb=5">
        <a href="hello" target="_blank">File 1</a>
        <a href="Style" target="_blank">File 2</a>
        <a href="ppi" target="_blank">Linktree</a>
        <a href="responsive" target="_blank">Responsive</a>
        <a href="responsive3" target="_blank">File 3</a>
        <a href="basic_list_group" target="_blank">Tugas kelompok</a>
        <a href="active_state" target="_blank">Tugas kelompok 2</a>
        <a href="js1" target="_blank">File 4</a>
        <a href="link" target="_blank">link.html</a>
        <a href="latihan" target="_blank">form asdos</a>
        <a href="buatnyobain" target="_blank">layout</a>
    </div>
</body>
</html>
