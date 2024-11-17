FROM nginx:1.21-alpine

LABEL maintainer="TheDarkNine <thedarknine@gmail.com>"

# Install packages
RUN apk --update --no-cache add openssl
