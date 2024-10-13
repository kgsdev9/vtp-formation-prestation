@extends('layout.layout')
@section('title', 'Devenir Prestataire')
@section('content')
<main>

	<section class="pb-8 mt-4">
		<div class="container">
			<div id="courseForm" class="bs-stepper">
				<div class="row">
					<div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                        <div class="card mb-3">
                            <div class="card-header border-bottom px-4 py-3">
                                <h4 class="mb-0">DEVENIR PRESTATAIRE</h4>
                            </div>
                            <!-- Card body -->
                            <form id="multiStepForm" method="POST" novalidate>
                                @csrf
                                <!-- Étape 1 -->
                                <div class="card-body step" id="step1">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Nom Complet</label>
                                        <input id="fullname" name="fullname" class="form-control" type="text" placeholder="John Doe" required>
                                        <div class="invalid-feedback" id="error-fullname"></div> <!-- Message d'erreur -->
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input id="email" name="email" class="form-control" type="email" placeholder="email@gmail.com" required>
                                        <div class="invalid-feedback" id="error-email"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Mot de passe</label>
                                                <input id="password" name="password" class="form-control" type="password" placeholder="*****" required>
                                                <div class="invalid-feedback" id="error-password"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="telephone" class="form-label">Téléphone</label>
                                                <input id="telephone" name="telephone" class="form-control" type="text" placeholder="098987878" required>
                                                <input type="checkbox" id="use_whatsapp"> Fonctionne-t-il avec WhatsApp?
                                                <div class="invalid-feedback" id="error-telephone"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3" id="whatsapp_field">
                                        <label for="whhatsapp" class="form-label">WhatsApp</label>
                                        <input id="whhatsapp" name="whhatsapp" class="form-control" type="text" placeholder="098987878">
                                        <div class="invalid-feedback" id="error-whatsapp"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="photo" class="form-label">Photo</label>
                                        <input id="photo" name="photo" class="form-control" type="file">
                                        <div class="invalid-feedback" id="error-photo"></div>
                                    </div>

                                    <button type="button" id="next1" class="btn btn-outline-secondary">Suivant</button>
                                </div>

                                <!-- Étape 2 -->
                                <div class="card-body step" id="step2" style="display: none;">
                                    <div class="mb-3">
                                        <label for="poste" class="form-label">Votre Fonction</label>
                                        <input id="poste" name="poste" class="form-control" type="text" placeholder="Gestionnaire d'application" required>
                                        <div class="invalid-feedback" id="error-poste"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="anneeexperience" class="form-label">Année d'expérience</label>
                                        <input id="anneexperience" name="anneexperience" class="form-control" type="number" placeholder="4" required>
                                        <div class="invalid-feedback" id="error-anneeexperience"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="skills" class="form-label">Mes Skills</label>
                                        <select name="skills[]" id="skills" class="form-select" multiple required>
                                            <option value="">Sélectionner des skills</option>
                                            @foreach ($allTags as $vallTags)
                                            <option value="{{ $vallTags->id }}">{{ $vallTags->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback" id="error-skills"></div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Décrivez-vous</label>
                                        <textarea name="description" class="form-control" id="description" cols="30" rows="2" required></textarea>
                                        <div class="invalid-feedback" id="error-description"></div>
                                    </div>

                                    <button type="button" class="btn btn-outline-secondary" id="prev1">Précédent</button>
                                    <button type="button" class="btn btn-outline-secondary" id="next2">Suivant</button>
                                </div>

                                <!-- Étape 3 -->
                                <div class="card-body step" id="step3" style="display: none;">
                                    <h3>Lister les projets déjà réalisés</h3>
                                    <div id="projectsContainer">
                                        <div class="row project-row">
                                            <div class="col-md-3">
                                                <label for="project_title_0" class="form-label">Titre</label>
                                                <input type="text" name="projects[0][title]" class="form-control form-control-sm" id="project_title_0" required>
                                                <div class="invalid-feedback" id="error-project_title_0"></div>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="project_link_0" class="form-label">Lien du projet</label>
                                                <input type="url" name="projects[0][link]" class="form-control form-control-sm" id="project_link_0" required>
                                                <div class="invalid-feedback" id="error-project_link_0"></div>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="project_description_0" class="form-label">Description</label>
                                                <input type="text" name="projects[0][description]" class="form-control form-control-sm" id="project_description_0" required>
                                                <div class="invalid-feedback" id="error-project_description_0"></div>
                                            </div>

                                            <div class="col-md-1">
                                                <button type="button" class="btn btn-danger removeRow" style="display:none;"><i class="fe fe-trash dropdown-item-icon"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3 mb-2">
                                        <button type="button" id="addProjectRow" class="btn btn-outline-secondary">Ajouter une expérience <i class="fe fe-plus dropdown-item-icon"></i></button>
                                    </div>

                                    <button type="button" id="prev2" class="btn btn-outline-secondary">Précédent</button>
                                    <button type="submit" class="btn btn-outline-secondary" id="btn-register-formateur">Soumettre</button>
                                    <button type="submit" class="btn btn-outline-secondary btn-sm" id="loader-register-formateur"> <div class="spinner-border" role="status"></div></button>
                                </div>
                            </form>

                        </div>

					</div>
				</div>
			</div>
		</div>
	</section>
</main>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function() {
        // Gestion du multi-step
        $('#next1').click(function() {
            $('#step1').hide();
            $('#step2').show();
        });

        $('#next2').click(function() {
            $('#step2').hide();
            $('#step3').show();
        });

        $('#prev1').click(function() {
            $('#step2').hide();
            $('#step1').show();
        });

        $('#prev2').click(function() {
            $('#step3').hide();
            $('#step2').show();
        });

        // Gestion du champ WhatsApp
        $('#whatsapp_field').hide();
        $('#use_whatsapp').change(function() {
            if($(this).is(':checked')){
                $('#whatsapp_field').hide();
            } else {
                $('#whatsapp_field').show();
            }
        });

        // Ajout dynamique des projets
        var projectIndex = 1;

        $('#addProjectRow').click(function() {
            var newRow = `
            <div class="row project-row mt-3">
                <div class="col-md-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" name="projects[${projectIndex}][title]" class="form-control form-control-sm" id="project_title_${projectIndex}" required>
                </div>
                <div class="col-md-3">
                   <label for="addCourseTitle" class="form-label">Lien du projet</label>
                    <input type="url" name="projects[${projectIndex}][link]" class="form-control form-control-sm" id="project_link_${projectIndex}">
                </div>
                <div class="col-md-3">
                    <label for="addCourseTitle" class="form-label">Description</label>
                    <input type="text" name="projects[${projectIndex}][description]" class="form-control form-control-sm" id="project_description_${projectIndex}">
                </div>
                <div class="col-md-1">
                    <a  href="#" class="removeRow"><i class="fe fe-trash dropdown-item-icon"></i></a>
                </div>
            </div>
            `;
            $('#projectsContainer').append(newRow);
            projectIndex++;
        });

        // Suppression dynamique des lignes de projets
        $(document).on('click', '.removeRow', function() {
            $(this).closest('.project-row').remove();
        });
    });
    </script>


@endsection
