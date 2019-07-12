
			<section class="stats sections">
				<h2 class="title"> Statystyki Użytkowników </h2>

				<div>
					<h3 class="second-title"> Czas wykonywania zapytań poszególnych użytkowników </h3> 

					<div class="scroll-table">
						<table class="main-table">
							<tr>
								<th> ip </th>
								<th> ilosc wykonanych zapytan  </th>
								<th> czas wykonania  </th>
								<th> średni czas wykonywani  </th>
								<th> maksymalny czas wykonywania </th>
								<th> minimalny czas wykonywania </th>
							</tr>
							<?php while($row = $querySelectStats2->fetch_assoc()) { ?>
							<tr>
								<td><?=$row['ip']?></td>
								<td><?=$row['ilosc wykonanych zapytan']?></td>
								<td><?=$row['czas wykonania']?></td>
								<td><?=$row['średni czas wykonywani']?></td>
								<td><?=$row['maksymalny czas wykonywania']?></td>
								<td><?=$row['minimalny czas wykonywania']?></td>
							</tr>
							<?php }?>
						</table>
					</div>

					<div class="duration"><?=$durationStats2?></div>
				</div>



				<div>
					<h3 class="second-title"> Ogólne statystyki </h3> 

					<div class="scroll-table">
						<table class="main-table">
							<tr>
								<th> ip </th>
								<th> user agent </th>
								<th> domena </th>
								<th> odwiedzone podstrony </th>
								<th> czas </th>
							</tr>
							<?php while($row = $querySelectStats->fetch_assoc()) { ?>
							<tr>
								<td><?=$row['ip']?></td>
								<td><?=$row['user_agent']?></td>
								<td><?=$row['domena']?></td>
								<td><?=$row['odwiedzone_podstrony']?></td>
								<td><?=$row['czas']?></td>
							</tr>
							<?php }?>
						</table>
					</div>

					<div class="duration"><?=$durationStats?></div>
				</div>

			</section>