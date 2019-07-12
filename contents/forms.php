			<section class="insert-form sections">
				<h2 class="title"> Dodaj przedmiot </h2>

				<div class="form">
					<form action="action/insert.php" method="POST" class="main-form" enctype="multipart/form-data">
						<input type="text" name="nazwa" placeholder="nazwa" class="main-input">
						<input type="text" name="cena" placeholder="cena" class="main-input">
						<input type="number" name="ilosc" placeholder="ilość" class="main-input">

						<select name="kategoria" class="main-input center">
							<option value="valid" disabled selected hidden> Wybierz Kategorie </option>
							<?php while($row = $querySelectOptions->fetch_assoc()) { ?>
							<option value="<?=$row['kategoria']?>"> <?=$row['kategoria']?></option>
							<?php } ?>
						</select>

						<textarea name="opis" placeholder="opis" class="main-input description"></textarea>
						<select name="ocena" class="main-input center">
							<option value="valid" disabled selected hidden> Wybierz ocene </option>
							<?php while($row = $querySelectRating->fetch_assoc()) { ?>
							<option value="<?=$row['ocena']?>"><?=$row['ocena']?></option>
							<?php } ?>
						</select>
						<button class="main-btn"> Dodaj </button>
					</form>
				</div>
			</section>

			<section>
				<h2 class="title">Usuwanie danych</h2>

				<form action="action/delete.php" method="POST" class="main-form">
					<label class="main-label">
						<span class="text"> Wybierz id produktu który chcesz usunąć </span>
						<input type="number" name="id" class="main-input">
					</label>
					<button class="main-btn"> Usuń </button>
				</form>
			</section>


			<section>
				<h2 class="title"> Modyfikowanie danych </h2>

				<form action="action/update.php" method="POST" class="main-form">
					<label class="main-label">	
						<span class="text"> Wybierz id po których chcesz edytować produkt </span>
						<input type="number" name="id" class="main-input">
					</label>

					<label class="main-label">
						<span class="text"> Wybierz co chcesz zmienić </span>
						<select name="zmiana" class="main-input">
							<option value="cena_brutto"> cena brutto </option>
							<option value="ilosc"> ilość </option>
							<option value="nazwa"> nazwa </option>
							<option value="opis"> opis </option>
						</select>
					</label>
					<input type="text" name="wartosc-zmiany" placeholder="wartość" class="main-input">

					<button class="main-btn"> Zmień </button>
				</form>
			</section>