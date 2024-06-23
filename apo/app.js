// Script para adicionar campos dinâmicos de formações acadêmicas, habilidades e experiências profissionais
$(document).ready(function() {
    var maxEducations = 5; // Número máximo de campos dinâmicos de formações
    var maxSkills = 5; // Número máximo de campos dinâmicos de habilidades
    var maxExperiences = 5; // Número máximo de campos dinâmicos de experiências

    $('#addEducation').click(function() {
        var currentCount = $('#educationsContainer').children().length;
        if (currentCount < maxEducations) {
            var educationCount = currentCount + 1;
            var newEducationField = `
                <div class="form-group">
                    <label for="inputEducation${educationCount}">Formação Acadêmica ${educationCount}</label>
                    <input type="text" class="form-control" id="inputEducation${educationCount}" name="education[]">
                </div>
            `;
            $('#educationsContainer').append(newEducationField);
        } else {
            alert('Você atingiu o número máximo de formações!');
        }
    });

    $('#addSkill').click(function() {
        var currentCount = $('#skillsContainer').children().length;
        if (currentCount < maxSkills) {
            var skillCount = currentCount + 1;
            var newSkillField = `
                <div class="form-group">
                    <label for="inputSkill${skillCount}">Habilidade ${skillCount}</label>
                    <input type="text" class="form-control" id="inputSkill${skillCount}" name="skill[]">
                </div>
            `;
            $('#skillsContainer').append(newSkillField);
        } else {
            alert('Você atingiu o número máximo de habilidades!');
        }
    });

    $('#addExperience').click(function() {
        var currentCount = $('#experiencesContainer').children().length;
        if (currentCount < maxExperiences) {
            var experienceCount = currentCount + 1;
            var newExperienceField = `
                <div class="form-group">
                    <label for="inputExperience${experienceCount}">Experiência Profissional ${experienceCount}</label>
                    <input type="text" class="form-control" id="inputExperience${experienceCount}" name="experience[]">
                </div>
            `;
            $('#experiencesContainer').append(newExperienceField);
        } else {
            alert('Você atingiu o número máximo de experiências!');
        }
    });
});
