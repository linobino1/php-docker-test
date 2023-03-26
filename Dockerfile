FROM webdevops/php-nginx

RUN sudo addgroup app --gid 1000
RUN sudo adduser app --uid 1000 --ingroup app --disabled-password
RUN chown -R app:app /app

USER app