set :application, "CEGwebSite"
set :domain,      "thecoonslab.com"
set :deploy_to,   "/var/www/#{domain}"
set :app_path,    "app"
set :user, "thecoon" # Le nom d’utilisateur du serveur distant

set :repository, "git@github.com:thecoons/cegweb.git" # L’URL de votre repository
set :branch, "master" # La branche Git, utile si vous pushez vos releases de prod sur une branche particulière
set :scm, :git # SVN ? Haha, vous plaisantez j’espère :-)
set :deploy_via, :copy # Ils y a plusieurs méthodes de déploiements, nous utilisons la méthode de copy

set :model_manager, "doctrine" # ORM

role :web, domain
role :app, domain, :primary => true

# Nous utilisons sudo pour régler les permissions via la methode :chown
# préférez l’utilisation des ACLs si c’est disponible sur votre serveur

set :use_sudo, true
set :keep_releases, 3 # Le nombre de releases à garder après un déploiement réussi

## Symfony2
set :shared_files, ["app/config/parameters.yml"] # Les fichiers à conserver entre chaque déploiement
set :shared_children, [app_path + "/logs",web_path + "/uploads", "vendor"] # Idem, mais pour les dossiers
set :use_composer, true
set :update_vendors, true # Il est conseillé de laisser a false et de ne pas faire de ‘composer update’ directement sur la prod
#set :composer_options, "--verbose --prefer-dist" # Permet de spécifier des paramètres supplémentaires à composer, inutile dans notre cas
set :writable_dirs, ["app/cache", "app/logs"] # Application des droits nécessaires en écriture sur les dossiers
set :webserver_user, "www-data" # L’utilisateur de votre serveur web (Apache, nginx, etc.)
set :permission_method, :chown # Dans le cas où vous n’avez pas les ACLs, ne pas oublier de mettre :use_sudo à true
set :use_set_permissions, true
set :dump_assetic_assets, true # dumper les assets

#default_run_options[:pty] = true # Si vous avez cette erreur : no tty present and no askpass program specified, alors décommentez
#ssh_options[:forward_agent] = true # Idem que ci-dessus

# # Permet d’avoir le détail des logs de capistrano, plus facile à débugger si vous rencontrer des erreurs
# IMPORTANT = 0
#
# INFO = 1
#
# DEBUG = 2
#
# TRACE = 3
#
# MAX_LEVEL = 3

logger.level = Logger::MAX_LEVEL

# Et enfin, si jamais vous rencontrez des erreurs de permissions, vous pouvez rajouter ces lignes suivantes :
after "deploy:finalize_update" do
run "sudo chown -R thecoon:www-data #{latest_release}"
run "sudo chmod -R 777 #{latest_release}/#{cache_path}"
run "sudo chmod -R 777 #{latest_release}/#{log_path}"
end

# task :upload_parameters do
#   origin_file = "app/config/prodParameters.yml"
#   destination_file = latest_release + "/app/config/parameters.yml" # Notice the
#   latest_release
#
#   try_sudo "mkdir -p #{File.dirname(destination_file)}"
#   top.upload(origin_file, destination_file)
# end
#
# before "deploy:share_childs", "upload_parameters"

# set :application, "CEGwebSite"
# set :domain,      "thecoon@thecoonslab.com"
# set :deploy_to,   "/var/www/#{domain}"
# set :app_path,    "app"
# set :shared_files,      ["app/config/parameters.yml"]
# set :shared_children,     [app_path + "/logs", web_path + "/uploads", "vendor"]
#
# set :user,  "thecoon"
#
# set :repository,  "https://github.com/thecoons/cegweb.git"
# set :scm,         :git
# # Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`
#
# set :model_manager, "doctrine"
# # Or: `propel`
#
# role :web,        domain                         # Your HTTP server, Apache/etc
# role :app,        domain, :primary => true       # This may be the same as your `Web` server
#
# set  :keep_releases,  3
#
# set :use_composer, true
# set :update_vendors, true
#
# # Be more verbose by uncommenting the following line
# # logger.level = Logger::MAX_LEVEL
