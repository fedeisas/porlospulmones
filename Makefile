
install:
	@echo " "
	@echo "================================================================="
	@echo "Installation starts on  "`date`
	@echo "================================================================="
	@echo " "
	@ssh fedeisas@fedeisas.com.ar "\
	    cd webapps/fbdomain/porlospulmones && \
	    git checkout . &&\
	    git pull origin master \
	"
	@echo "================================================================="
	@echo "Installation finished on "`date`
	@echo "================================================================="
	@echo " "

.PHONY: install